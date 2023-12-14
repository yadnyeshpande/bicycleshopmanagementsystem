from flask import Flask, render_template, request, redirect, url_for, session,flash
from pymongo import MongoClient
from werkzeug.security import generate_password_hash, check_password_hash
import hashlib
import requests

app = Flask(__name__)
app.secret_key = "reg"  # Replace with a secret key
client = MongoClient("mongodb://localhost:27017")
db = client["cycle_shop"]  # Replace with your database name
users = db["user_cred"]



@app.route("/", methods=["GET", "POST"])
def login():
    error = None
    if request.method == "POST":
        username = request.form.get("username")
        password = request.form.get("password")

        user = users.find_one({"username": username})

        if user and check_password_hash(user["password"], password):
            session["username"] = username
            return redirect(url_for("index"))  # Redirect to the index endpoint

        error = "Invalid username or password."

    return render_template("login.html", error=error)

@app.route("/index")
def index():
    if "username" in session:
        return render_template("INDEX.html")
    return render_template("INDEX.html")


@app.route("/register", methods=["GET", "POST"])
def register():
    error = None  # Initialize the error message variable

    if request.method == "POST":
        username = request.form.get("username")
        password = request.form.get("password")
        phonenumber = request.form.get("phone-number")
        email = request.form.get("email")

        hashed_password = generate_password_hash(password)

        # Check if the username already exists in the database
        if users.find_one({"username": username}):
            error = "Username already exists, please choose another one."

        # If the username doesn't exist, proceed with registration
        else:
            print(f"Registering user: {username}")
            users.insert_one(
                {"username": username, "password": hashed_password, "phonenumber": phonenumber, "email": email})
            # flash('Registration successful. You can now log in.', 'success')

            return redirect(url_for('login'))

    # Pass the error message to the template
    return render_template("regis.html", error_message=error)
@app.route('/explore')
def explore():
    return render_template('index2.html')
@app.route('/home')
def home():
    return render_template('INDEX.html')
if __name__=='__main__': 
    app.run(host='0.0.0.0',debug=True)