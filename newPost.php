<?php require 'connection.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStylee.css">
    <link relu="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Create Post</title>
</head>
<body>
    <!-- insert query -->
    <?php

        $post_title = $post_des = $post_price = $post_category = $post_condition = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $post_title = $_POST["title"];
            $post_des = $_POST["description"];
            $post_price = $_POST["price"];
            $post_category = $_POST["category"];
            $post_condition = $_POST["condition"];


            $insertQuery = "INSERT INTO posttable (post_title, post_des, post_price, post_category, post_condition) VALUES (?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($insertQuery);
            $stmt->bind_param("sssss", $post_title, $post_des, $post_price, $post_category, $post_condition);
            $stmt->execute();
        }

    ?>

    <div id="newPostOuterContainer">
        <div id="newPostNav">
            <div id="logo"></div>
            <ul>
                <li><a href="homepage.php" style="text-decoration: none;">Home</a></li>
                <li>Explore</li>
                <li>
                    <a href="newPost.php" id="clickMe" style="text-decoration: underline;">Create Post</a>
                </li>
                <li>
                    <div id="userNameNavCtn">
                        <div id="userNameCtn">Profile</div>
                        <div id="userNameDropDown"></div>
                    </div>
                </li>
                <li onclick="logout()" id="logoutBtn">Logout</li>
            </ul>
        </div>

        <div id="postFormCtn">
            <div id="myContainer">
                
            </div>
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


    <script src="app.js"></script>
    
</body>
</html>
