<?php
session_start();

include "functions.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isUserLoggedIn()) {
    $messageContent = $_POST['message'];
    $user_id = $_SESSION['user_id'];
    $timestamp = date('Y-m-d H:i:s');

    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "message_board_db";

    $conn = mysqli_connect($server, $user, $password, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $insertSql = "INSERT INTO messages (user_id, content, created_at) VALUES ('$user_id', '$messageContent', '$timestamp')";
    if ($conn->query($insertSql) === TRUE) {
        // Redirect back to index.php after posting the message
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $insertSql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
