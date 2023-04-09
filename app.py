from flask import Flask, url_for, request
from flask import render_template
import sqlite3 as sql

# con = sql.connect("bbb.db")
# cursor = con.cursor()

app = Flask(__name__)

# DO WE NEED TO HAVE INDIVIDUALLY SAVED CARTS BETWEEN MULTIPLE USERS?
# ATM, IF I ADD BOOKS TO SHOPPER a's CART, THEY ALSO APPEAR IN SHOPPER b's CART AS WELL.

if __name__ == "__main__":
    app.run(debug=True)

@app.route("/test", methods=["GET", "POST"])
def test():
    print(request.form.get("input1"))
    return render_template("test.html")

@app.route("/")
@app.route("/index")
def home():
    return render_template("index.php")


@app.route("/search", methods=["GET", "POST"])
def search():
    if request.method == "GET":
        return render_template("search.php")
    if request.method == "POST":
        con = sql.connect("sql/bbb.db")
        cursor = con.cursor()
        # Get input username and PIN from form.
        username = request.form.get("username")
        PIN = request.form.get("PIN")
        check = cursor.execute("SELECT PIN FROM user WHERE username = ?", (username,))
        password = ""
        for row in check.fetchall():
            password = row[0]
        
        # If given password is the same as the password for given username in database, allow user to go to search page. Otherwise, reload user login page.
        if PIN == password:
            return render_template("search.php", username=username, PIN=password)
        else:
            return render_template("user_login.php")
        
# GETTING AN ERROR WHEN TRYING TO INPUT NEW USER. "DATABASE IS LOCKED". ANY IDEA HOW TO BYPASS THIS?
@app.route("/customer_registration", methods=["GET", "POST"])
def customer_registration():    
    con = sql.connect("sql/bbb.db")
    cursor = con.cursor()

    if request.method == "POST":
        form = request.form
        insertUser = "INSERT INTO user VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);"
        cursor.execute(insertUser, [
            form['inputUsername'],
            form['inputPIN'],
            form['inputFirstname'],
            form['inputLastname'],
            form['inputAddress'],
            form['inputAddress2'],
            form['inputCity'],
            form['inputState'],
            form['inputZip'],
            form['inputCardNum'],])
                
        insertCard = "INSERT INTO credit VALUES (?, ?, ?)"
        cursor.execute(insertCard,[
            form['inputCardNum'],
            form['inputSecCode'],
            form['inputExpDate'],
        ])
        con.commit()

    return render_template("customer_registration.php")


@app.route("/user_login")
def user_login():
    return render_template("user_login.php")

# Not sure if admin verification belongs here or under admin_tasks route
@app.route("/admin_login", methods=["GET", "POST"])
def admin_login():
    if request.method == "GET":
        return render_template("admin_login.php")
    if request.method == "POST":
        username = request.form.get("username")
        PIN = request.form.get("PIN")
        if username == "admin" and PIN == "admin":
            return render_template("admin_tasks.php", username=username, PIN=PIN)
        else:
            return render_template("admin_login.php")

@app.route("/results/<string:keyword>")
def results(keyword, methods=["POST"]):
    # keywords = sanitize(keywords) # prevent SQL injections?

    con = sql.connect("sql/bbb.db")
    cursor = con.cursor()
    eqi = keyword.find("=")
    attr = keyword[:eqi]
    value = keyword[eqi+1:]

    if attr == "title":
        books = cursor.execute("SELECT * FROM book WHERE title = ?", (value,))
    elif attr == "author":
        books = cursor.execute("SELECT * FROM book WHERE author = ?", (value,))
    elif attr == "genre":
        books = cursor.execute("SELECT * FROM book WHERE genre = ?", (value,))
    elif attr == "publisher":
        books = cursor.execute("SELECT * FROM book WHERE publisher = ?", (value,))
    elif attr == "isbn":
        books = cursor.execute("SELECT * FROM book WHERE ISBN = ?", (value,))
    elif attr == "anywhere":
        books = cursor.execute("SELECT * FROM book WHERE title = ? OR author = ? OR publisher = ? OR ISBN = ?", (value,value,value,value,))
    else:
        books = cursor.execute("SELECT * FROM book WHERE title = ? OR author = ? OR publisher = ? OR ISBN = ?", (value,value,value,value,))
    
    return render_template("results.php", books=books.fetchall())


@app.route("/reviews/<string:ISBN>", methods=["GET"])
def reviews(ISBN):
    con = sql.connect("sql/bbb.db")
    cursor = con.cursor()

    reviewList = cursor.execute("SELECT review FROM review WHERE ISBN = ?", (ISBN,)).fetchall()
    title = cursor.execute("SELECT title FROM book WHERE ISBN = ?", (ISBN,)).fetchone()[0]

    return render_template("reviews.php", title = title, reviewList = reviewList)

@app.route("/shopping_cart")
def shopping_cart():
    
    return render_template("shopping_cart.php")

@app.route("/confirm_order")
def confirm_order():
    return render_template("confirm_order.php")

@app.route("/proof_purchase")
def proof_purchase():
    return render_template("proof_purchase.php")

@app.route("/update_customerprofile")
def update_customerprofile():
    return render_template("update_customerprofile.php")

# Not sure if admin verification belongs here or under admin_login route
@app.route("/admin_tasks", methods=["GET", "POST"])
def admin_tasks():
    if request.method == "GET":
        return render_template("admin_tasks.php")
    if request.method == "POST":
        username = request.form.get("username")
        PIN = request.form.get("PIN")
        if username == "admin" and PIN == "admin":
            return render_template("admin_tasks.php", username=username, PIN=PIN)
        else:
            return render_template("admin_login.php")

@app.route("/lstor")
def lstor():
    return render_template("__localStorageTest.html")

@app.route("/lstor2")
def lstor2():
    return render_template("__localStorageTest2.html")

@app.errorhandler(404)
def not_found(e):
    return render_template("error/404.html")
