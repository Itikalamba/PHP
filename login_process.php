<?php
session_start();

$loginMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "message_board_db";

    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["username"];
            
            header("Location: index.php");
            exit();
        } else {
           $loginMessage = "Invalid password";
        }
    } else {
        $loginMessage = "User not found";
    }

    $conn->close();
}
?>