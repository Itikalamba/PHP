<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>iDiscuss</title>
    <style>
    body {
        background-image: url("./images/png-signup.png");
    }

    .container {
        height: 80vh;
        width: 100%;
    }
    </style>
</head>

<body>
    <?php
  include "./partials/_header.php";
  ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active " data-bs-interval="1000">
                            <img src="images\forum-2.webp" class="d-block w-100 custom-carousel-image" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="1000">
                            <img src="images\forum-3.jpg" class="d-block w-100 custom-carousel-image" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="1000">
                            <img src="images\forum-4.webp" class="d-block w-100 custom-carousel-image" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-8 carousel-side">
                <h3 class="heading">Welcome to Our Community</h3>
                <p class="sub-head">"Join us to connect, learn, and share experiences"</p>
                <p class="sub-head">Contribute to discussions and make your voice heard in our vibrant community.</p>
            </div>
        </div>
    </div>

    <div class="center"><h2 class="heading">Public Message Portal</h2></div>
<?php
  include "./public_msg_board.php";
  ?>
<?php
  include "./partials/_footer.php";
  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>
</html>