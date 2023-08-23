<style>
.message-board {
    margin-top: 20px;
}

.message {
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
    
}

.message strong {
    color: #333;
}

.message span.timestamp {
  float: right;
    color: #777;
    font-size: 0.8em;
    margin-left: 10px;
}

.message-form {
    margin-top: 20px;
    background-color: #f5f5f5;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 15px;
}

.message-form textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: vertical;
}

.message-form input[type="submit"] {
    background-color: #198754;
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.message-form input[type="submit"]:hover {
    background-color: #198754;
}
.login-to-msg{
  text-decoration: none;
  padding:10px;
  background-color: #198754;
  border-radius:2px;
  color:white;
  margin:20px;

}
.login-to-msg:hover{
  color:black;
  background-color:grey;
}
</style>
<?php
//this function file is used to check isUserLoggedIn()
include "functions.php";


// Connect to the database
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "message_board_db";

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// fetching data from db
$messagesSql = "SELECT m.content, u.username, m.created_at FROM messages m INNER JOIN users u ON m.user_id = u.id ORDER BY m.created_at DESC";
$messagesResult = $conn->query($messagesSql);
?>

<!-- display msg  -->
<div class="message-board">
    <?php while ($row = $messagesResult->fetch_assoc()): ?>
        <div class="message">
            <strong><?php echo $row['username']; ?>:</strong>
            <?php echo $row['content']; ?>
            <span class="timestamp"><?php echo $row['created_at']; ?></span>
        </div>
    <?php endwhile; ?>
</div>


<?php
$conn->close();
?>

<!-- display form if user login -->
<?php 
if (isUserLoggedIn()): ?>
    <div class="message-form">
    <form method="post" action="post_message.php">
        <textarea name="message" rows="4" placeholder="Write your message"></textarea><br>
        <input type="submit" value="Post Message">
    </form>
</div>
<?php endif; ?>
<?php 
if (!isUserLoggedIn()): ?>
<div class="center"><a href="login.php" class="btn login-to-msg">login to post message in Portal</a></div>
<?php endif; ?>