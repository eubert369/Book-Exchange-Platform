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
            <div class="row">
                <div id="sidebar" class="col-3 fixed-top sidebar p-2 min-vh-100">
                    <div class="d-flex flex-row p-3 shadow head-nav">
                        <i class="border border-white rounded-circle"><img src="../assets/accounts.png" alt="Profile photo" class="img" width="47"></i>
                        <div class="d-flex flex-column ms-2 text-white">
                            <span class="fw-bold">Nestine Nicole Navarro</span>
                            <span class="profile-content">2.9K Followers . 500 Following</span>
                            <span class="profile-content">Lives in Tacloban City</span>
                        </div>
                    </div>

                    <ul class="nav">
                        <li class="btn nav-item d-flex home flex-row w-100 px-5 py-0">
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
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
                            <i class="d-flex align-items-center"><img src="../assets/wish_list-icon.png" alt="home icon" width="20" class="img"></i>
                            <a href="#" class="nav-link">Wish List</a>
                        </li>
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
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
                        <li class="btn nav-item d-flex flex-row w-100 px-5 py-0">
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
                            <a href="#" class="nav-link">Logout</a>
                        </li>
                    </ul>
                </div>
                <div id="content" class="col border content px-0">
                    <ul class="nav bg-light sticky-top head-nav shadow p-2 px-4">
                        <div class="w-100 d-flex justify-content-between mt-1 p-0">
                            <input class="border rounded-3 px-3 w-100" type="text" placeholder="Search">
                            <a href="../index.php" class="pb-2 px-2"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
                        </div>
                        <div class="my-1 w-100">
                            <a class="mx-2" href="#daily-discover">Daily Discover</a>
                            <a class="mx-2" href="#featured">Featured</a>
                            <a class="mx-2" href="#recommended">Recommended for you</a>
                            <a class="mx-2" href="#check_this_out">Check this out</a>
                            <a class="mx-2" href="#for_sale">For sale</a>
                            <a class="mx-2" href="#for_exchange">For exchange</a>
                            <a class="mx-2" href="#for_rent">For rent</a>
                        </div>
                    </ul>
                    <div id="daily-discover" class="mx-2 px-3">
                        <h4 id="daily-discover-header">Daily Discover</h4>
                        <div id="content-cards" class="mx-2 d-flex px-4 overflow-x-auto" style="height: 300px; width: 980px;">
                            <!-- card -->
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="featured" class="mx-2 px-3">
                        <h4 id="featured-header">Featured</h4>
                        <div class="mx-2 d-flex px-4 overflow-x-auto" style="height: 300px; width: 980px;">
                            <!-- card -->
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="recommended" class="mx-2 px-3">
                        <h4 id="recommended-header">Recommended for you</h4>
                        <div class="mx-2 d-flex overflow-x-auto" style="height: 300px; width: 980px;">
                            <!-- card -->
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="check_this_out" class="mx-2 px-3">
                        <h4 id="check-this-out-header">Check this out</h4>
                        <div class="mx-2 d-flex overflow-x-auto" style="height: 300px; width: 980px;">
                            <!-- card -->
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="for_sale" class="mx-2 px-3">
                        <h4 id="for-sale-header">For Sale</h4>
                        <div class="mx-2 d-flex overflow-x-auto" style="height: 300px; width: 980px;">
                            <!-- card -->
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="for_exchange" class="mx-2 px-3">
                        <h4 id="for-exchange-header">For Exchange</h4>
                        <div class="mx-2 d-flex overflow-x-auto" style="height: 300px; width: 980px;">
                            <!-- card -->
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="for_rent" class="mx-2 mb-4 px-3">
                        <h4 id="for-rent-header">For Rent</h4>
                        <div class="mx-2 d-flex overflow-x-auto" style="height: 300px; width: 980px;">
                            <!-- card -->
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card m-2" style="width: 200px; flex: 0 0 auto;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- DAILY DISCOVERY CONTENT -->
                    <div id="daily-discovery-content" class="daily-discovery-content mt-3 w-100">
                        <h4 class="text-center daily_discovery_text mx-5 pb-2">DAILY DISCOVER</h4>
                        <div class="row justify-content-center mx-5 mb-4">
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FEATURED CONTEMT -->
                    <div id="featured-content" class="daily-discovery-content mt-3 w-100">
                        <h4 class="text-center daily_discovery_text mx-5 pb-2">FEATURED</h4>
                        <div class="row justify-content-center mx-5 mb-4">
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- RECOMMENDED FOR YOU CONTENT -->
                    <div id="recommended-content" class="daily-discovery-content mt-3 w-100">
                        <h4 class="text-center daily_discovery_text mx-5 pb-2">RECOMMENDE FOR YOU</h4>
                        <div class="row justify-content-center mx-5 mb-4">
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- CHECK THIS OUT CONTENT -->
                    <div id="check-this-content" class="daily-discovery-content mt-3 w-100">
                        <h4 class="text-center daily_discovery_text mx-5 pb-2">CHEK THIS OUT</h4>
                        <div class="row justify-content-center mx-5 mb-4">
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FOR SALE CONTENT -->
                    <div id="for-sale-content" class="daily-discovery-content mt-3 w-100">
                        <h4 class="text-center daily_discovery_text mx-5 pb-2">FOR SALE</h4>
                        <div class="row justify-content-center mx-5 mb-4">
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FOR EXCHANGE CONTENT -->
                    <div id="for-exchange-content" class="daily-discovery-content mt-3 w-100">
                        <h4 class="text-center daily_discovery_text mx-5 pb-2">FOR EXCHANGE</h4>
                        <div class="row justify-content-center mx-5 mb-4">
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FOR RENT -->
                    <div id="for-rent-content" class="daily-discovery-content mt-3 w-100">
                        <h4 class="text-center daily_discovery_text mx-5 pb-2">FOR RENT</h4>
                        <div class="row justify-content-center mx-5 mb-4">
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_limits.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-3 m-2 shadow" style="width: 200px;">
                                <img src="../assets/city_of_secrets.png" class="img mx-auto" alt="..." width="130px" height="170px">
                                <div class="card-body py-0">
                                    <p id="book-title" class="card-title mb-0 fw-bold">City of Secrets</p>
                                    <p class="card-text mt-0 mb-2">Marie Fernandez <br>
                                        Self Help</p>
                                    <div class="card-foot price d-flex justify-content-between align-items-center p-0">
                                        <span class="fw-bold p-0">P100.00</span>
                                        <div class="btns d-flex flex-row mb-2 dropdown">
                                            <button class="btn btn-card p-1 rounded-circle me-1 d-flex justify-content-center align-items-center"><img src="../assets/like-icon.png" alt="like"></button>
                                            <button class="btn btn-card p-1 rounded-circle ms-1 d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" aria-expanded="false"><img src="../assets/add.png" alt="add"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Add to Cart</a></li>
                                                <li><a class="dropdown-item" href="#">Add to Wishlist</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </body>
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./js/app-homepage.js?v=<?php echo time(); ?>"></script>

    </html>
<?php
} else {
    header("Location: login.php");
    exit();
}
?>