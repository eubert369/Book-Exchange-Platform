<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookLoopPH | Home</title>
    <link rel="icon" href="../assets/bookloopph-website-favicon-white.png">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./css/style.css"> -->
</head>
<style>
    .navbar-brand:hover {
        background-color: #FAEBD9;
    }

    #nav-icons:hover {
        background-color: #FAEBD9;
    }

    #book-club:hover {
        background-color: #8A6342;
    }

    #book-club:hover p {
        color: #FAEBD9;
    }

    #book-trading:hover {
        background-color: #8A6342;
    }

    #book-trading:hover p {
        color: #FAEBD9;
    }

    #my-details:hover {
        background-color: #8A6342;
    }

    #my-details:hover p {
        color: #FAEBD9;
    }

    #to-rate:hover {
        background-color: #8A6342;
    }

    #to-rate:hover p {
        color: #FAEBD9;
    }

    #name:hover {
        text-decoration: underline;
    }

    #create-post:hover {
        border: 2px solid #8A6342;
    }

    .home-anchors {
        text-decoration: none;
    }

    .home-anchors:hover {
        text-decoration: underline;
        font-style: italic;
    }
</style>

<body>
    <div class="container-fluid p-0">
        <!-- NAV -->
        <nav id="navbar" class="navbar navbar-expand-lg w-100 shadow fixed-top" style="border-bottom: 2px solid #CE9461; background-color: #FFF;">
            <div class="container-fluid px-5">
                <div class="row w-100">
                    <a class="col-1 navbar-brand rounded-circle text-center" href="#">
                        <img id="logo" class="img-fluid" src="../assets/bookloopph-website-favicon-white.png" alt="Bootstrap" width="60">
                    </a>
                    <div class="col-lg-7 col-9 d-flex px-2 justify-content-end">
                        <input class="form-control search-input w-50 me-2" type="search" placeholder="Search" aria-label="Search" style="background-color: #FAEBD9;">
                    </div>
                    <button class="col-1 ms-5 justify-content-end navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="col-3 col-lg-1 collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav px-2">
                            <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="#"><img src="../assets/home.png" alt="home" width="35"></a>
                            <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="#"><img src="../assets/shopping-cart.png" alt="shopping" width="35"></a>
                            <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="#"><img src="../assets/message.png" alt="messaging" width="35"></a>
                            <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="#"><img src="../assets/notif.png" alt="notification" width="35"></a>
                            <a id="nav-icons" class="nav-link rounded-4 ps-3 d-flex justify-content-end" href="#"><img src="../assets/profile.png" alt="profile" width="35"></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- HERO -->
        <div class="offset container-fluid" style="margin-top: 7em;">
            <div class="row">
                <!-- SIDEBAR -->
                <div id="sidebar" class="col-3 d-flex flex-column">
                    <a id="book-club" href="#" class="btn py-3 shadow-sm mx-auto fw-bold d-flex justify-content-start flex-items-center w-75 border-bottom border-2" style="color: #8A6342;"><i class="me-2"><img src="../assets/bookclub.png" alt="bookclub-icon" width="80"></i>
                        <p class="my-auto">Book Club</p>
                    </a>
                    <a id="book-trading" href="#" class="btn py-3 shadow-sm mx-auto fw-bold d-flex justify-content-start flex-items-center w-75 border-bottom border-2" style="color: #8A6342;"><i class="me-2"><img src="../assets/booktrading.png" alt="book-trading-icon" width="80"></i>
                        <p class="my-auto">Book Trading</p>
                    </a>
                    <a id="my-details" href="#" class="btn py-3 shadow-sm mx-auto fw-bold d-flex justify-content-start flex-items-center w-75 border-bottom border-2" style="color: #8A6342;"><i class="me-2"><img src="../assets/myDetails.png" alt="my-details-icon" width="80"></i>
                        <p class="my-auto">My Details</p>
                    </a>
                    <a id="to-rate" href="#" class="btn py-3 shadow-sm mx-auto fw-bold d-flex justify-content-start flex-items-center w-75 border-bottom border-2" style="color: #8A6342;"><i class="me-2"><img src="../assets/toRate.png" alt="to-rate-icon" width="80"></i>
                        <p class="my-auto">To Rate</p>
                    </a>
                </div>
                <div class="col mx-5 px-5">
                    <div class="container px-5 shadow">
                        <div class="row border-bottom rounded-top p-4">
                            <img class="col-2" src="../assets/profile.png" alt="profile">
                            <div class="col" style="color: #8A6342;">
                                <h4 id="name" class="fw-bold">Nestine Nicole Navarro</h4>
                                <p>
                                    2.9K Followers . 500 Following <br>
                                    Lives in Tacloban City
                                </p>
                            </div>
                            <div class="col-1">
                                <button class="btn" id="create-post" href="#"><img src="../assets/writing-square.png" alt="edit-profile" width="40"></button>
                            </div>
                            <div class="container-fluid mt-3">
                                <div class="row">
                                    <div class="col-5 px-4 py-2 rounded rounded-4" style="background-color: #FAEBD9; color: #8A6342;">
                                        <h4 class="fw-medium">Interests</h4>
                                        <p>Crime & Thriller, Mystery & Suspense and <a class="text-decoration-none fw-bold" href="#" style="color: #8A6342;">2 more</a></p>
                                    </div>
                                    <div class="col ms-4 p-0">
                                        <div class="container-fluid p-0 h-100">
                                            <div class="row p-0 h-100 align-items-end" style="color: #8A6342;">
                                                <div class="col mx-1 text-center p-0">
                                                    <i class="p-3 rounded-circle position-relative" style="background-color: #EEE;">
                                                        <img class="opacity-50" src="../assets/books-exchanged.png" alt="books-exchanged" width="25">
                                                        <p class="position-absolute top-50 start-50 translate-middle fw-bold" style="font-size: 13px;">99</p>
                                                    </i>
                                                    <p class="mt-4 mb-0" style="font-size: 10px;">Books<br>Exchanged</p>
                                                </div>
                                                <div class="col mx-1 text-center p-0">
                                                    <i class="p-3 rounded-circle position-relative" style="background-color: #EEE;">
                                                        <img class="opacity-50" src="../assets/books-rented.png" alt="books-rented" width="25">
                                                        <p class="position-absolute top-50 start-50 translate-middle fw-bold" style="font-size: 13px;">99</p>
                                                    </i>
                                                    <p class="mt-4 mb-0" style="font-size: 10px;">Books<br>Rented</p>
                                                </div>
                                                <div class="col mx-1 text-center p-0">
                                                    <i class=" p-3 rounded-circle position-relative" style="background-color: #EEE;">
                                                        <img class="opacity-50" src="../assets/books-lent.png" alt="books-lent" width="25">
                                                        <p class="position-absolute top-50 start-50 translate-middle fw-bold" style="font-size: 13px;">99</p>
                                                    </i>
                                                    <p class="mt-4 mb-0" style="font-size: 10px;">Books<br>Lent</p>
                                                </div>
                                                <div class="col mx-1 text-center p-0">
                                                    <i class=" p-3 rounded-circle position-relative" style="background-color: #EEE;">
                                                        <img class="opacity-50" src="../assets/books-sold.png" alt="books-sold" width="25">
                                                        <p class="position-absolute top-50 start-50 translate-middle fw-bold" style="font-size: 13px;">99</p>
                                                    </i>
                                                    <p class="mt-4 mb-0" style="font-size: 10px;">Books<br>Sold</p>
                                                </div>
                                                <div class="col mx-1 text-center p-0">
                                                    <i class=" p-3 rounded-circle position-relative" style="background-color: #EEE;">
                                                        <img class="opacity-50" src="../assets/books-bought.png" alt="books-bought" width="25">
                                                        <p class="position-absolute top-50 start-50 translate-middle fw-bold" style="font-size: 13px;">99</p>
                                                    </i>
                                                    <p class="mt-4 mb-0" style="font-size: 10px;">Books<br>Bought</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-3 fw-bold px-5 text-center border-bottom rounded-bottom">
                            <a id="posts" class="col m-0 home-anchors" href="#" style="color: #8A6342;">Posts</a>
                            <a id="liked" class="col m-0 home-anchors" href="#" style="color: #8A6342;">Liked</a>
                            <a id="reviews" class="col m-0 home-anchors" href="#" style="color: #8A6342;">Reviews</a>
                            <a id="wish-list" class="col m-0 home-anchors" href="#" style="color: #8A6342;">Wish List</a>
                            <a id="bookshelf" class="col m-0 home-anchors" href="#" style="color: #8A6342;">Bookshelf</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="..//bootstrap/bootstrap.bundle.min.js"></script>

</html>