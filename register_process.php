<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPassword = "";
    $dbName = "message_board_db";
    
    $conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Check if the user with the given email already exists
    $checkSql = "SELECT email FROM users WHERE email = '$email'";
    $result = $conn->query($checkSql);
    
    if ($result->num_rows > 0) {
        echo "User with this email already exists!";
    } else {
        // If no user with this email exists, insert the new user
        $insertSql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashedPassword')";
        
        if ($conn->query($insertSql) === TRUE) {
            // Redirect to login page after successful registration
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
}
?>
