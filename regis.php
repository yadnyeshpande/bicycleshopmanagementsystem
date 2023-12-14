<?php

// Display errors for debugging purposes (remove this in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "test";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["username"];
    $user_email = $_POST["email"];
    $user_mobile = $_POST["MobileNumber"];
    $user_password = $_POST["password"];

    $stmt = $conn->prepare("INSERT INTO users (username, email, MobileNumber, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $user_name, $user_email, $user_mobile, $user_password);

    if ($stmt->execute()) {
        echo "Sign up successful...";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>
