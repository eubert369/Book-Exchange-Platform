<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/white-logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
</head>
<title>Index</title>
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
                        <a id="home" class="nav-link active text-white mx-3 fs-5" aria-current="page" href="#">Home</a>
                        <li class="nav-item dropdown mx-3">
                            <a id="guidelines" class="nav-link dropdown-toggle text-white fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Guidelines
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Selling guidelines</a></li>
                                <li><a class="dropdown-item" href="#">Exchange guidelines</a></li>
                                <li><a class="dropdown-item" href="#">Borrow books guidelines</a></li>
                            </ul>
                        </li>
                        <a id="how-to-use" class="nav-link text-white mx-3 fs-5" href="#">How to use</a>
                        <a id="faqs" class="nav-link text-white mx-3 fs-5" href="#">FAQs</a>
                        <a id="why-us" class="nav-link text-white mx-3 fs-5" href="#">Why Us?</a>
                        <a id="about-us" class="nav-link text-white mx-3 fs-5" href="#">About Us</a>
                        <a id="about-us" class="nav-link text-white mx-3 fs-5 fw-bold" href="login.php">Login</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container-fluid px-0 bg-black">
            <img id="bg-img" src="assets/index-bg.jpeg" alt="background image" class="img-fluid">
            <div class="row">
                <div class="position-absolute top-50 start-50 translate-middle">
                    <div id="contain-text" class=" p-3 w-100" style="opacity: .8;">
                        <h1 class="text-center text-light fw-bold" style="font-size: 50px;">Join us in unlocking the literary treasures<br>of our network</h1>
                        <p class="text-center text-light fs-3">Journey alongside fellow readers in unlocking the magic of literature</p>
                        <a id="join" href="signUp.php" class="btn rounded-pill fs-4 fw-bold bg-light position-absolute start-0 start-50 translate-middle-x w-25 p-1 mt-2">Join</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

<!-- <script src="bootstrap.min.js"></script> -->
<script src="bootstrap.bundle.min.js"></script>

</html>