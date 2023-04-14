from flask import Flask, request, session, Response, render_template, make_response
import json
import sqlite3 as sql
from datetime import datetime

# con = sql.connect("bbb.db")
# cursor = con.cursor()

app = Flask(__name__)

app.secret_key = "SECRET_KEY"

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
        if request.form.get("username") == "" or request.form.get("PIN") == "":
            return render_template("user_login.php")
        else:
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


@app.route("/user_login", methods=["GET", "POST"])
def user_login():
    if request.method == "POST":
        d = json.loads(request.data)
        print(d["username"])
        print(d["password"])
        con = sql.connect("sql/bbb.db")
        curs = con.cursor()
        user = curs.execute("SELECT * FROM user WHERE (username = ? AND pin = ?)", [d["username"], d["password"],]).fetchone()
        print(user)
        if user is None:
            return make_response("fail")
        else:
            return make_response("success")
        
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

@app.route("/reports")
def reports():
    # Need to run 4 queries to get each info:
        # Total number of registered customers in the system at the time and date of inquiry
        # Total number of book titles available in each category, in descending order
        # Average monthly sales, in dollars, for the current year, ordered by month
        # All book titles and the number of reviews for that book
    con = sql.connect("sql/bbb.db")
    cursor = con.cursor()

    num_of_registered_users = cursor.execute("SELECT COUNT(username) FROM user").fetchall()
    num_of_books_per_genre = cursor.execute("SELECT genre, COUNT(genre) FROM book WHERE genre='Fantasy' OR genre='Horror' OR genre='Realistic Fiction' OR genre='Adventure' GROUP BY genre ORDER BY COUNT(genre) DESC").fetchall()
    # monthly_sales
    book_titles_and_num_of_reviews = cursor.execute("SELECT title, COUNT(review) FROM book AS B, review AS R WHERE B.ISBN = R.ISBN GROUP BY title").fetchall()

    return render_template("reports.php", num_of_registered_users=num_of_registered_users, num_of_books_per_genre=num_of_books_per_genre, book_titles_and_num_of_reviews=book_titles_and_num_of_reviews)

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

@app.route("/confirm_order", methods=["GET", "POST"])
def confirm_order():
    if request.method == "GET":
        return render_template("confirm_order.php")
    if request.method == "POST":
        con = sql.connect("sql/bbb.db")
        cursor = con.cursor()
        username = session['username']
        # username = cursor.execute("SELECT username FROM user WHERE username =?", (value)).fetchall()
        return render_template("confirm_order.php", username=username)

@app.route("/proof_purchase", methods=["GET", "POST"])
def proof_purchase():
    if request.method == "GET":
        return render_template("proof_purchase.php")
    if request.method == "POST":


        return render_template("proof_purchase.php")

@app.route("/update_customerprofile")
def update_customerprofile():
    return render_template("update_customerprofile.php")

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
