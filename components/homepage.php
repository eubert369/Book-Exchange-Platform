<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="../assets/white-logo.png">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light border-bottom fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i><img class="shadow" src="../assets/black-logo.png" alt="logo" width="50"></i></a>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="container-fluid text-center">
                        <div class="row justify-content-center">
                            <div class="col">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 row justify-content-center">
                                    <li class="nav-item col-3 col-md-1">
                                        <a class="nav-link active" aria-current="page" href="#"><i><img src="../assets/home.png" alt="home" class="img-fluid"></i></a>
                                    </li>
                                    <li class="nav-item col-3 col-md-1 dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i><img src="../assets/books.png" alt="home" class="img-fluid"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Books for Swapping</a></li>
                                            <hr class="dropdown-divider">
                                            <li><a class="dropdown-item" href="#">Books for Rent</a></li>
                                            <hr class="dropdown-divider">
                                            <li><a class="dropdown-item" href="#">Books for Sale</a></li>
                                            <hr class="dropdown-divider">
                                            <li><a class="dropdown-item" href="#">Sell Book</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item col-3 col-md-1">
                                        <a class="nav-link" href="#"><i><img src="../assets/leaderboard.png" alt="home" class="img-fluid"></i></a>
                                    </li>
                                    <li class="nav-item col-3 col-md-1">
                                        <a class="nav-link" href="#"><i><img src="../assets/communities.png" alt="home" class="img-fluid"></i></a>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-3">
                                <ul class="navbar-nav row h-100 justify-content-center">
                                    <li class="col nav-item">
                                        <a class="nav-link" href="#"><i><img src="../assets/plus-icon.png" alt="home" class="img-fluid"></i></a>
                                    </li>
                                    <li class="col nav-item">
                                        <a class="nav-link" href="#"><i><img src="../assets/chats.png" alt="home" class="img-fluid"></i></a>
                                    </li>
                                    <li class="col nav-item">
                                        <a class="nav-link" href="#"><i><img src="../assets/notif.png" alt="home" class="img-fluid"></i></a>
                                    </li>
                                    <li class="col nav-item">
                                        <a class="nav-link" href="#"><i><img src="../assets/accounts.png" alt="home" class="img-fluid"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</body>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>

</html>
<!-- <!DOCTYPE html>
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
            </div>
        </div>
    </div> -->

<?php

// $query = "SELECT post_title, post_des FROM posttable";

// $result = $conn->query($query);

// if ($result) {
//     $rows = $result->fetch_all(MYSQLI_ASSOC);
?>

<!-- <div id="postOuterCtn">
        <?php
        // array_map(function ($row) {
        //     echo "<div id='postInnerCtn'>";
        //     echo "<p>Title: {$row['post_title']}</p>";
        //     echo "<p>Description: {$row['post_des']}</p>";
        //     echo "</div>";
        // }, $rows);
        ?>
    </div> -->

<?php
//     $result->free_result();
// } else {
//     echo "Error executing the query: " . $connection->error;
// }

?>
<script src="bootstrap.bundle.min.js"></script>

<script src="app.js"></script>
</body>

</html>