<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookRedux</title>
    <link rel="icon" href="./assets/Book_Logo.png">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./components/css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="container-fluid p-0">
        <!-- NAV -->
        <nav class="navbar navbar-expand-lg shadow bg-light fixed-top">
            <div class="container-fluid mx-3">
                <a class="navbar-brand" href="#"><img src="./assets/Book_Logo.png" alt="Logo" width="130" class="img"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2 px-3">
                            <a class="nav-link fs-5" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-2 px-3">
                            <a class="nav-link fs-5" href="#howItWorks">How it Works</a>
                        </li>
                        <li class="nav-item mx-2 px-3">
                            <a class="nav-link fs-5" href="#hints">Hints</a>
                        </li>
                        <li class="nav-item mx-2 px-3">
                            <a class="nav-link fs-5" href="#aboutUs">About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <a id="login-btn" href="./components/login.php" class="btn px-4 py-2 fw-bold">Login</a>
                </div>
            </div>
        </nav>

        <!-- HOME -->
        <div class="container-fluid offset border">
            <div class="row min-vh-100 align-items-center">
                <div id="landing-title" class="col mx-3">
                    <h1 class="mx-2" style="font-size: 70px;">Uncover New Stories, Trade Used Pages</h1>
                    <a id="signup-btn" href="./components/signup.php" class="btn fw-bold px-5 w-75 py-2 ms-2">Sign Up</a>                    
                </div>
                <div class="col mx-3 d-flex justify-content-center">
                    <img class="img" src="./assets/Reading-book.gif" alt="Image" width="350" height="350">
                </div>
            </div>
        </div>

        <!-- HOW IT WORKS -->
        <div id="howItWorks" class="container-fluid px-0 pt-5 min-vh-100 offset">
            <h1 id="howItWorks-head" class="mx-auto text-center w-25 mt-5 pb-2">How it works</h1>
            <div id="howItWorks-header" class="row w-75 mx-auto mt-4 px-5">
                <div class="col text-center">
                    <span class="fs-5">Selling</span>
                </div>
                <div class="col text-center">
                    <span class="fs-5">Buying</span>
                </div>
                <div class="col text-center">
                    <span class="fs-5">Exchange</span>
                </div>
                <div class="col text-center">
                    <span class="fs-5">Rent</span>
                </div>
                <div class="col text-center">
                    <span class="fs-5">Donate</span>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-2 mx-4 mb-3 card border-0">
                    <div class="card-body">
                        <h1 id="howItWorks-num" class="card-title text-center">1</h1>
                        <p id="num-text" class="card-text text-center">Create an Account</p>
                    </div>
                </div>
                <div class="col-2 mx-4 mb-3 card border-0">
                    <div class="card-body">
                        <h1 id="howItWorks-num" class="card-title text-center">2</h1>
                        <p id="num-text" class="card-text text-center">Browse available books for renting</p>
                    </div>
                </div>
                <div class="col-2 mx-4 mb-3 card border-0">
                    <div class="card-body">
                        <h1 id="howItWorks-num" class="card-title text-center">3</h1>
                        <p id="num-text" class="card-text text-center">Check availability and rental terms</p>
                    </div>
                </div>
                <div class="col-2 mx-4 mb-3 card border-0">
                    <div class="card-body">
                        <h1 id="howItWorks-num" class="card-title text-center">4</h1>
                        <p id="num-text" class="card-text text-center">Initiate rental request</p>
                    </div>
                </div>
                <div class="col-2 mx-4 mb-3 card border-0">
                    <div class="card-body">
                        <h1 id="howItWorks-num" class="card-title text-center">5</h1>
                        <p id="num-text" class="card-text text-center">Agree on rental terms</p>
                    </div>
                </div>
                <div class="col-2 mx-4 mb-3 card border-0">
                    <div class="card-body">
                        <h1 id="howItWorks-num" class="card-title text-center">6</h1>
                        <p id="num-text" class="card-text text-center">Payment and security deposit</p>
                    </div>
                </div>
                <div class="col-2 mx-4 mb-3 card border-0">
                    <div class="card-body">
                        <h1 id="howItWorks-num" class="card-title text-center">7</h1>
                        <p id="num-text" class="card-text text-center">Book delivery or pick up</p>
                    </div>
                </div>
                <div class="col-2 mx-4 mb-3 card border-0">
                    <div class="card-body">
                        <h1 id="howItWorks-num" class="card-title text-center">8</h1>
                        <p id="num-text" class="card-text text-center">Rental period and return the book and security deposit</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- HINTS -->
        <div id="hints" class="container-fluid offset px-0 min-vh-100 pt-4">
            <h1 id="hints-head" class="mx-auto text-center w-25 mt-5 pb-2">Hints</h1>

            <div id="carouselExampleIndicators" class="carousel slide mt-5">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex flex-row justify-content-center">
                            <div class="card mx-3 rounded-4" style="width: 18rem;">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Book Buyback Prices Explained</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">January 20, 2023</h6>
                                    <p id="num-text" class="card-text mt-3" style="text-align: justify;">Sometimes you get a good buyback offer for a textbook and no offer for a piece of fiction. Why is it so?</p>
                                    <a id="hints-btn" class="btn">Continue Reading</a>
                                </div>

                            </div>
                            <div class="card mx-3 rounded-4" style="width: 18rem;">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Book Buyback Prices Explained</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">January 20, 2023</h6>
                                    <p id="num-text" class="card-text mt-3" style="text-align: justify;">Sometimes you get a good buyback offer for a textbook and no offer for a piece of fiction. Why is it so?</p>
                                    <a id="hints-btn" class="btn">Continue Reading</a>
                                </div>
                            </div>

                            <div class="card mx-3 rounded-4" style="width: 18rem;">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Book Buyback Prices Explained</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary">January 20, 2023</h6>
                                    <p id="num-text" class="card-text mt-3" style="text-align: justify;">Sometimes you get a good buyback offer for a textbook and no offer for a piece of fiction. Why is it so?</p>
                                    <a id="hints-btn" class="btn">Continue Reading</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="carousel-indicators position-relative mt-3">
                    <button id="indicator" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="border-radius: 50%; height: 15px; width: 15px;"></button>
                    <button id="indicator" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="" aria-label="Slide 2" style="border-radius: 50%; height: 15px; width: 15px;"></button>
                    <button id="indicator" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="" aria-label="Slide 3" style="border-radius: 50%; height: 15px; width: 15px;"></button>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- ABOUT US -->
        <div id="aboutUs" class="container-fluid px-0 min-vh-100 pt-4">
            <h1 id="aboutUs-head" class="mx-auto text-center w-25 mt-5 pb-2">About Us</h1>
            <p class="px-5 mt-4 fs-4 text-center">Welcome to <span style="color: #6CB6DA;">Book</span>Redux – an online platform where students and book enthusiasts come together to ignite their love for learning, sharing, and connecting. Our goal is to empower you to buy, sell, exchange, and rent books seamlessly, all while nurturing a vibrant community that celebrates the joy of reading.</p>

            <div class="row text-center px-5 mt-5">
                <div id="mission-vission" class="col mx-4 p-4 rounded-4">
                    <h3>Mission Statement</h3>
                    <p style="text-align: justify;">&emsp;Our mission is to build a lively online marketplace connecting students and book lovers, making it easy to buy, sell, rent, and exchange books. We're all about creating a community that values accessible, affordable, and sustainable reading. Our goal is to empower individuals in their quest for knowledge, personal development, and the joy of reading by facilitating book sharing and reuse.</p>
                </div>
                <div id="mission-vission" class="col mx-4 p-4 rounded-4">
                    <h3>Vision Statement</h3>
                    <p style="text-align: justify;">&emsp;Our vision is to transform how students and book lovers access used books. We want to be the top choice for affordable literary resources, creating a global community of passionate readers. With technology and shared enthusiasm, we aim to reshape knowledge sharing, fostering a sustainable and inclusive reading community.</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>

</html>