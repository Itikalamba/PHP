<?php 
session_start();
?>
<style>
    .logout-btn{
        background-color:#198754;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">iDiscuss</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" tabindex="-1" >Contact</a>
                </li>
            </ul>
            <div class="mx-2">
                <div id="user-info" class="navbar-text">
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo "Welcome, " . $_SESSION['username'];
                        echo '<a href="logout.php" class="btn logout-btn mx-2">Logout</a>';
                    }
                    ?>
                </div>
                <?php
                if (!isset($_SESSION['username'])) {
                    echo '<button class="btn btn-success mx-2" id="loginButton">Login</button>
                          <button class="btn btn-success mx-2" id="signupButton">Signup</button>';
                }
                ?>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById("loginButton").addEventListener("click", function() {
        window.location.href = "login.php";
    });
   

    document.getElementById("signupButton").addEventListener("click", function() {
        window.location.href = "register.php";
    });
</script>
