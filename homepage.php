<?php require 'connection.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStylee.css">
    
    <title>Home Page</title>
</head>
<body>
   

    <!-- Home Page -->
    <div id="outerContainerHomePage">
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
    </div>

    <?php

    $query = "SELECT post_title, post_des FROM posttable";

    $result = $conn->query($query);

    if ($result) {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    ?>

    <div id="postOuterCtn">
        <?php
        array_map(function($row) {
            echo "<div id='postInnerCtn'>";
            echo "<p>Title: {$row['post_title']}</p>";
            echo "<p>Description: {$row['post_des']}</p>";
            echo "</div>";
        }, $rows);
        ?>
    </div>

    <?php
        $result->free_result();
    } else {
        echo "Error executing the query: " . $connection->error;
    }
    
    ?>

    
    <script src="app.js"></script>
</body>
</html>