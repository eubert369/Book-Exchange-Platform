<?php
session_start();
$id = $_SESSION["id"];
$user = $_SESSION["user"];
$pass = $_SESSION["pass"];

if (isset($user) && isset($pass)) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BookRedux | Home</title>
        <link rel="icon" href="../assets/Book_Logo.png">
        <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="./css/homepage-style.css?v=<?php echo time(); ?>">
    </head>

    <body>
        <div id="body-container" class="container-fluid px-0">
            <div class="row mx-0">
                <div id="sidebar" class="col-3 sidebar p-2 min-vh-100">
                    <div class="d-flex flex-row p-3 shadow head-nav">
                        <i class="border border-white rounded-circle"><img src="../assets/accounts.png" alt="Profile photo" class="img" width="65" height="65"></i>
                        <div class="d-flex flex-column ms-2 text-white">
                            <span class="fw-bold">Nestine Nicole Navarro</span>
                            <span class="profile-content">2.9K Followers . 500 Following</span>
                            <span class="profile-content">Lives in Tacloban City</span>
                        </div>
                    </div>

                    <ul class="nav">
                        <li id="home-side-btn" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/home-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/notification-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">Notification</a>
                        </li>
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/group_message-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">Messages</a>
                        </li>
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/cart-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">Cart</a>
                        </li>
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/book_club-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">Book Club</a>
                        </li>
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/book_trading-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">Book Trading</a>
                        </li>
                        <li id="wishlist-side-btn" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/wish_list-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">Wish List</a>
                        </li>
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/book_shelf-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">Book Shelf</a>
                        </li>
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/categories-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">Categories</a>
                        </li>
                        <li id="myList-side-btn" class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/my_list-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">My List</a>
                        </li>
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/my_likes-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">My Likes</a>
                        </li>
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/my_profile-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">My Profile</a>
                        </li>
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/logout.png" alt="home icon" width="20" class="img"></i>
                            <a href="./php-queries/read.php" class="nav-link">Logout</a>
                        </li>
                    </ul>
                </div>
                <div id="content" class="col border content px-0">
                    <!-- <ul class="nav bg-light head-nav shadow py-2 px-4">
                        <div class="w-100 d-flex justify-content-between mt-1 p-0">
                            <input class="border rounded-3 px-3 w-100" type="text" placeholder="Search">
                            <a href="../index.php" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
                        </div>
                        <div class="my-1 w-100">
                            <a class="mx-2" id="daily-discover-anchor" href="#daily-discover">Daily Discover</a>
                            <a class="mx-2" id="featured-anchor" href="#featured">Featured</a>
                            <a class="mx-2" id="recommended-anchor" href="#recommended">Recommended for you</a>
                            <a class="mx-2" id="check_this_out-anchor" href="#check_this_out">Check this out</a>
                            <a class="mx-2" id="for_sale-anchor" href="#for_sale">For sale</a>
                            <a class="mx-2" id="for_exchange-anchor" href="#for_exchange">For exchange</a>
                            <a class="mx-2" id="for_rent-anchor" href="#for_rent">For rent</a>
                        </div>
                    </ul> -->
                    <!-- <div class="container-fluid"> -->
                        <div class="d-flex h-100 w-100">
                            <iframe id="content-frame" class="flex-fill w-100 border" src="./homepage-content.php" frameborder="0"></iframe>
                        </div>
                    <!-- </div> -->
                </div>
    </body>
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./js/app-homepage.js?v=<?php echo time(); ?>"></script>

    </html>
<?php
} else {
    header("Location: ../index.php");
    exit();
}
?>