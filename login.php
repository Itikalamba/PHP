<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/f73d1228fc.js" crossorigin="anonymous"></script>
</head>

<body>


    <div class="wrapper">
        <div class="side-image">
            <img src="images\ssignup.jpg" alt="">
        </div>
        <div class="container">
            <div class="form-box">
                <h2>Login</h2>
                <form method="post" action="login_process.php">

                    <label for="username">UserName:</label>
                    <div class="box">
                        <div class="icon-box"><i class="fa-solid fa-envelope"></i></div>
                        <input type="text" id="username" name="username" placeholder="name"><br><br>
                    </div>

                    <label for="password">Password:</label>
                    <div class="box">
                        <div class="icon-box"><i class="fa-solid fa-key"></i></div>
                        <input type="password" id="password" name="password" placeholder="password"><br><br>
                    </div>

                    <input class="btn" type="submit" value="Login">
                </form>
            </div>
        </div>
    </div>


</body>

</html>