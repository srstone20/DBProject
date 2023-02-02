from flask import Flask
from flask import render_template

app = Flask(__name__)

if __name__ == "__main__":
    app.run(debug=True)

@app.route("/")
@app.route("/index")
def home():
    return render_template("index.php")

@app.route("/screen2")
def screen2():
    return render_template("screen2.php")

@app.route("/customer_registration")
def customer_registration():
    return render_template("customer_registration.php")

@app.route("/user_login")
def user_login():
    return render_template("user_login.php")

@app.route("/admin_login")
def admin_login():
    return render_template("admin_login.php")

@app.route("/screen3")
def screen3():
    return render_template("screen3.php")

@app.route("/screen4")
def screen4():
    return render_template("screen4.php")

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
