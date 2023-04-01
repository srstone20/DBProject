from flask import Flask, url_for, request
from flask import render_template
import sqlite3 as sql

# con = sql.connect("bbb.db")
# cursor = con.cursor()

app = Flask(__name__)

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


@app.route("/search")
def search():
    return render_template("search.php")

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

@app.route("/admin_login")
def admin_login():
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
    elif attr == "publisher":
        books = cursor.execute("SELECT * FROM book WHERE publisher = ?", (value,))
    elif attr == "isbn":
        books = cursor.execute("SELECT * FROM book WHERE ISBN = ?", (value,))
    else:
        books = cursor.execute("SELECT title, author, publisher, ISBN, price FROM book WHERE title = ?", (keyword,))
    
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

@app.route("/admin_tasks")
def admin_tasks():
    return render_template("admin_tasks.php")

@app.route("/lstor")
def lstor():
    return render_template("__localStorageTest.html")

@app.route("/lstor2")
def lstor2():
    return render_template("__localStorageTest2.html")

@app.errorhandler(404)
def not_found(e):
    return render_template("error/404.html")
