<?php require 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="icon" href="assets/white-logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Home Page</title>
</head>

<body>
    <div class="container-fluid px-0">
        <nav id="navbar" class="navbar navbar-expand-lg position-absolute w-100 top-0">
            <div class="container-fluid px-5">
                <a class="navbar-brand text-center" href="#">
                    <img id="logo" class="img-fluid shadow" src="assets/white-logo.png" alt="Bootstrap" width="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav container-fluid justify-content-end">
                        <a id="home" class="nav-link active text-white mx-3 fs-5" aria-current="page" href="#"><img class="img" src="assets/home-icon.png" alt="home" width="30"></a>
                        <a id="how-to-use" class="nav-link text-white mx-3 fs-5" href="#"><img class="img" src="assets/book-barter.png" alt="barter" width="30"></a>
                        <a id="faqs" class="nav-link text-white mx-3 fs-5" href="#"><img class="img" src="assets/lending-hub.png" alt="lending hub" width="30"></a>
                        <a id="why-us" class="nav-link text-white mx-3 fs-5" href="#"><img class="img" src="assets/sale-icon.png" alt="lending hub" width="30"></a>
                        <a id="about-us" class="nav-link text-white mx-3 fs-5" href="#"><img class="img" src="assets/friends.png" alt="lending hub" width="30"></a>
                        <a id="about-us" class="nav-link text-white mx-3 fs-5" href="#"><img class="img" src="assets/book-club.png" alt="lending hub" width="30"></a>
                        <a id="about-us" class="nav-link text-white mx-3 fs-5" href="#"><img class="img" src="assets/location.png" alt="lending hub" width="30"></a>
                        <a id="about-us" class="nav-link text-white mx-3 fs-5" href="#"><img class="img" src="assets/messaging.png" alt="lending hub" width="30"></a>
                        <a id="about-us" class="nav-link text-white mx-3 fs-5" href="#"><img class="img" src="assets/notif-icon.png" alt="lending hub" width="30"></a>
                        <a id="about-us" class="nav-link text-white mx-3 fs-5" href="login.php"><img class="img" src="assets/profile.png" alt="lending hub" width="30"></a>
                        <input class="form-control w-25 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </div>
            </div>
        </nav>
        <div class="container text-center border">
            <div class="row position-absolute top-50 start-50 translate-middle">
                <!-- <div class="position-absolute top-50 start-50 translate-middle"> -->
                    <div class="col-3 border m-3 p-3 rounded-4" style="background-color: #E0D8B0;">
                        <h1>Book Sold</h1>
                    </div>
                    <div class="col-3 border m-3 p-3 rounded-4" style="background-color: #E0D8B0;">
                        <h1>Book Bought</h1>
                    </div>
                    <div class="col-3 border m-3 p-3 rounded-4" style="background-color: #E0D8B0;">
                        <h1>Book Loaned</h1>
                    </div>
                    <div class="col-3 border m-3 p-3 rounded-4" style="background-color: #E0D8B0;">
                        <h1>Book Lent</h1>
                    </div>
                    <div class="col-3 border m-3 p-3 rounded-4" style="background-color: #E0D8B0;">
                        <h1>Book Bartered</h1>
                    </div>
                    <div class="col-3 border m-3 p-3 rounded-4" style="background-color: #E0D8B0;">
                        <h1>Book Shared</h1>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>

    <!-- Home Page -->
    <!-- <div id="outerContainerHomePage">
        <div id="homePageNav">
            <div id="logo"></div>
            <ul>
                <li>Home</li>
                <li>Explore</li>
                <li>
                    <a href="newPost.php" id="clickMe">+</a>
                </li>
                <li>
                    <div id="userNameNavCtn">
                        <div id="userNameCtn"></div>
                        <div id="userNameDropDown"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div> -->

    <?php

    $query = "SELECT post_title, post_des FROM posttable";

    $result = $conn->query($query);

    if ($result) {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    ?>

        <!-- <div id="postOuterCtn">
        <?php
        array_map(function ($row) {
            echo "<div id='postInnerCtn'>";
            echo "<p>Title: {$row['post_title']}</p>";
            echo "<p>Description: {$row['post_des']}</p>";
            echo "</div>";
        }, $rows);
        ?>
    </div> -->

    <?php
        $result->free_result();
    } else {
        echo "Error executing the query: " . $connection->error;
    }

    ?>
    <script src="bootstrap.bundle.min.js"></script>

    <script src="app.js"></script>
</body>

</html>