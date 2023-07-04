<?php require 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link relu="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/white-logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Create Post</title>
</head>
<body>
    <!-- insert query -->
    <?php

        $post_title = $post_des = $post_price = $post_category = $post_condition = $post_image = $post_type = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $post_title = $_POST["title"];
            $post_des = $_POST["description"];
            $post_price = $_POST["price"];
            $post_category = $_POST["category"];
            $post_condition = $_POST["condition"];

            $post_type = "sale";


            $insertQuery = "INSERT INTO posttable (post_title, post_des, post_price, post_category, post_condition, post_type) VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("ssssss", $post_title, $post_des, $post_price, $post_category, $post_condition, $post_type);
            $stmt->execute();
        }

    ?>

    <div class="container-fluid px-0" id="newPostOuterContainer">
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
                        <a id="home" class="nav-link active text-white mx-3 fs-5" aria-current="page" href="homepage.php"><img class="img" src="assets/home-icon.png" alt="home" width="30"></a>
                        <a id="how-to-use" class="nav-link text-white mx-3 fs-5" href="bookBarter.php"><img class="img" src="assets/book-barter.png" alt="barter" width="30"></a>
                        <a id="faqs" class="nav-link text-white mx-3 fs-5" href="#"><img class="img" src="assets/lending-hub.png" alt="lending hub" width="30"></a>
                        <a id="why-us" class="nav-link text-white mx-3 fs-5" href="newPost.php"><img class="img" src="assets/sale-icon.png" alt="lending hub" width="30"></a>
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

        <div id="postFormCtn">
            <form action="" method="post" id="postForm">
                <label for="title" class="postHeader">Title</label>
                <input type="text" placeholder="Enter Title" id="title" name="title">
                <label for="description" class="postHeader">Description</label>
                <textarea placeholder="Describe your item" id="description" name="description" rows="10" cols="40"></textarea>
                <label for="price" class="postHeader">Price (optional)</label>
                <input type="text" id="price" name="price">
                <label for="fiction" class="postHeader">Category</label>
                <div>
                    <input type="radio" value="fiction" name="category" id="fiction">
                    <label for="fiction">Fiction</label>
                    <input type="radio" value="non-Fiction" name="category" id="nonFiction">
                    <label for="fiction">Non-Fiction</label>
                    <input type="radio" value="romance" name="category" id="romance">
                    <label for="fiction">Romance</label>
                    <input type="radio" value="children" name="category" id="children">
                    <label for="fiction">Children</label>
                </div>

                <label for="condition" class="postHeader">Item Condition</label>
                <div>
                    <input type="radio" value="new" name="condition" id="new">
                    <label for="new">New</label>
                    <input type="radio" value="like new" name="condition" id="likeNew">
                    <label for="fiction">Like New</label>
                    <input type="radio" value="good" name="condition" id="good">
                    <label for="fiction">Good</label>
                    <input type="radio" value="fair" name="condition" id="fair">
                    <label for="fiction">Fair</label>
                </div>
                <div onclick="openFileUploader()" id="addPhotos">+ Add photos</div>

                <button type="submit" id="postButton">Post</button>
            </form>
        </div>
    </div>


    <script src="bootstrap.bundle.min.js"></script>
    <script src="app.js"></script>
</body>
</html>
