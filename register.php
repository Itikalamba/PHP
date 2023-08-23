<!DOCTYPE html>
<html>

<head>
    <title>User Registration</title>
    <script src="https://kit.fontawesome.com/f73d1228fc.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="wrapper">
        <div class="side-image">
            <img src="images\ssignup.jpg" alt="">
        </div>
        <div class="container">

            <div class="form-box">
                <h2>User Registration</h2>
                <form method="post" action="register_process.php">
                    <label for="username">Username:</label>
                    <div class="box">
                        <div class="icon-box"><i class="fa-solid fa-user"></i></div>
                        <input type="text" id="username" name="username" placeholder="name" required><br><br>
                    </div>

                    <label for="email">Email:</label>
                    <div class="box">
                        <div class="icon-box"><i class="fa-solid fa-envelope"></i></div>
                        <input type="email" id="email" name="email" placeholder="email"><br><br>
                    </div>

                    <label for="password">Password:</label>
                    <div class="box">
                        <div class="icon-box"><i class="fa-solid fa-key"></i></div>
                        <input type="password" id="password" name="password" placeholder="password"><br><br>
                    </div>

                    <input class="btn" type="submit" value="Register">
                </form>
            </div>
        </div>

    </div>
</body>

</html>