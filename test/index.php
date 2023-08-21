<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookRedux</title>
    <link rel="icon" href="./assets/BookRedux.png">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
</head>
<style>
    .navbar-brand:hover {
        border-bottom: 2px solid black;
    }

    .nav-item .nav-link:hover {
        font-weight: bold;
        /* text-decoration: underline; */
        border-bottom: 2px solid black;
    }

    #index-image {
        background-image: url("./assets/bookBundle.png");
        width: 50%;
    }
</style>

<body>
    <div class="container-fluid p-0">
        <!-- NAV -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container-fluid mx-3">
                <a class="navbar-brand" href="#"><img src="./assets/BookRedux.png" alt="Logo" width="130" class="img"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2 px-3">
                            <a class="nav-link fs-4" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item mx-2 px-3">
                            <a class="nav-link fs-4" href="#">Hints</a>
                        </li>
                        <li class="nav-item mx-2 px-3">
                            <a class="nav-link fs-4" href="#">About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex">
                    <a href="#" class="btn border border-white px-4 py-2 fw-bold btn-outline-secondary">Login</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid offset border">
            <div class="row min-vh-100 align-items-center">
                <div class="col mx-3 border">
                    <h1 class="fw-bold mx-2">Uncover New Stories, Trade Used Pages</h1>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="#" class="btn fw-bold px-5 py-2 mx-5 border">Get started</a>
                        <a href="#" class="btn fw-bold px-5 py-2 mx-5 border">How it works</a>
                    </div>
                </div>
                <div class="col mx-3 d-flex justify-content-center">
                    <img class="bg-secondary rounded-circle" src="./assets/bookBundle.png" alt="Image" width="350" height="350">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./bootstrap/bootstrap.bundle.min.js"></script>

</html>