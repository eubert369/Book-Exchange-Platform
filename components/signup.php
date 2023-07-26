<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/white-logo.png">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <title>Sign Up</title>

    <style>
        #show-password {
            background-image: url('../assets/icons8_hide_127px 1.png');
            background-size: 36px 36px;
            height: 36px;
            width: 36px;
        }

        #show-password:active {
            background-image: url('../assets/icons8_eye_127px 1.png');
        }
    </style>
</head>

<body style="overflow-y: hidden; overflow-x: hidden;">
    <form action="./php queries/create.php?signUp=createUser" method="post">
        <div class="container-fluid p-0 min-vh-100">
            <a class="btn position-absolute m-3 rounded-pill px-3 fw-bold" href="../index.php" style="background-color: #DEA0575E;">
                <i class="rounded-circle p-2"><img style="width: 50px;" src="../assets/black-logo.png" alt="logo" /></i>
                Home
            </a>
            <div class="row ">
                <div class="col-6 p-0">
                    <img class="img-fluid min-vh-100" src="../assets/signup_background.png" alt="background">
                </div>
                <div class="col-6 p-0 d-flex justify-content-center align-items-end vh-100 pb-5" style="background-color: #E0D8B0;">
                    <div class="mx-5 w-75">
                        <h1 class="fw-bold mb-3">Create an Account</h1>
                        <!-- <form action="./php queries/create.php?signUp=createUser" method="post"> -->
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control px-3 rounded-4" id="username" name="username" placeholder="null" style="border: 2px solid #CE9461;" required>
                            <label class="fw-bold" for="username">Username</label>
                        </div>
                        <div class="form-floating mb-4 position-relative">
                            <input type="password" class="form-control px-3 rounded-4" id="password" name="password" placeholder="null" style="border: 2px solid #CE9461;" required>
                            <label class="fw-bold" for="password">Password</label>
                            <span id="show-password" class="position-absolute me-3 top-50 end-0 translate-middle-y"></span>
                        </div>
                        <div class="w-100 mb-3">
                            <small>
                                8 character minimum, case-sensitive.<br>
                                Tip: Use upper and lowercase, numbers, and symbols for strong passwords.
                            </small>
                        </div>
                        <div class="w-100 text-center">
                            <button onclick="explore()" class="btn text-white px-4 rounded-4 w-50 fw-bold" style="background-color: #CE9461;">Join Now!</button>
                            <p class="fs-5 mt-5">Already have an account? <a href="login.php">Click here!</a></p>
                        </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
        <div id="welcome" class="offset container-fluid min-vh-100 p-0" style="background-image: url('../assets/welcomeBackground.png');">
            <div id="carouselExampleIndicators" class="carousel slide min-vh-100">
                <div class="carousel-indicators w-25 mx-auto mb-5">
                    <button type="button" style="background-color: #CE9461; height: 20px; width: 20px; border-radius: 50%;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" style="background-color: #CE9461; height: 20px; width: 20px; border-radius: 50%;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" style="background-color: #CE9461; height: 20px; width: 20px; border-radius: 50%;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" style="background-color: #CE9461; height: 20px; width: 20px; border-radius: 50%;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" style="background-color: #CE9461; height: 20px; width: 20px; border-radius: 50%;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active min-vh-100">
                        <div class="carousel-text w-50 position-absolute top-50 start-50 translate-middle">
                            <h1 class="text-center fw-bold fs-1 text-black mb-5">Welcome!</h1>
                            <p class="text-center text-black fs-3 mb-5">Connect, Exchange and Expand your Literary Universe with our Book Exchange Network</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <a class="btn text-center text-white fw-bold rounded-4 px-5" style="background-color: #CE9461;" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item min-vh-100">
                        <div class="carousel-text w-50 position-absolute top-50 start-50 translate-middle">
                            <h1 class="text-center fw-bold fs-1 text-black">Setup your account</h1>
                            <label class="fs-4 text-black mt-2" for="firstName">First Name</label><br>
                            <input class="w-100 rounded-3 fs-4 p-2" id="firstName" name="firstName" type="text" style="border-color: #CE9461;" required>
                            <label class="fs-4 text-black mt-2" for="lastName">Last Name</label><br>
                            <input class="w-100 rounded-3 fs-4 p-2" id="lastName" name="lastName" type="text" style="border-color: #CE9461;" required>
                            <label class="fs-4 text-black mt-2" for="email">Email</label><br>
                            <input class="w-100 rounded-3 fs-4 p-2" id="email" name="email" type="email" style="border-color: #CE9461;" required>
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col text-center">
                                        <button onclick="explore()" class="btn text-center text-white fw-bold rounded-4 px-5" style="background-color: #CE9461;" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item min-vh-100">

                        <div class="carousel-text w-50 position-absolute top-50 start-50 translate-middle">
                            <h1 class="text-center fw-bold fs-1 text-black">Setup your account</h1>
                            <div class="custom-file text-center mt-5">
                                <label class="custom-file-label rounded-circle border" for="imageUpload" style="background-color: #D9D9D9; cursor: pointer; width: 150px;"><i><img class="w-100 rounded-circle p-2" src="../assets/image.png" id="img-icon" alt="image icon"></i></label>
                                <input type="file" class="d-none custom-file-input" id="imageUpload" name="imageUpload" accept="image/gif, image/jpeg, image/png" onchange="getImage(event);">
                                <p class="fs-4 mt-2">Add Your Photo</p>
                            </div>
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col text-center">
                                        <a class="btn text-center text-white fw-bold rounded-4 px-5" style="background-color: #CE9461;" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">Next</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item min-vh-100">
                        <div class="carousel-text w-75 position-absolute top-50 start-50 translate-middle">
                            <h1 class="text-center fw-bold fs-1 text-black mb-4">Your Interests</h1>
                            <div class="container-fluid text-center bg-white w-100 p-3" style="height: 50vh; border: 2px solid #CE9461; overflow-y: auto;">
                                <div class="row justify-content-center btn-group">
                                    <input type="checkbox" name="interests[]" class="btn-check" id="sci-fiction" autocomplete="off" value="Science Fiction">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="sci-fiction" style="border: 2px solid #CE9461;">
                                        Science Fiction
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="novel" autocomplete="off" value="Novel">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="novel" style="border: 2px solid #CE9461;">
                                        Novel
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="fiction" autocomplete="off" value="Fiction">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="fiction" style="border: 2px solid #CE9461;">
                                        Fiction
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="non-fiction" autocomplete="off" value="Non-Fiction">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="non-fiction" style="border: 2px solid #CE9461;">
                                        Non-Fiction
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="drama" autocomplete="off" value="Drama">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="drama" style="border: 2px solid #CE9461;">
                                        Drama
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="comedy" autocomplete="off" value="Comedy">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="comedy" style="border: 2px solid #CE9461;">
                                        Comedy
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="fantasy" autocomplete="off" value="Fantasy">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="fantasy" style="border: 2px solid #CE9461;">
                                        Fantasy
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="romance" autocomplete="off" value="Romance">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="romance" style="border: 2px solid #CE9461;">
                                        Romance
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="action" autocomplete="off" value="Action">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="action" style="border: 2px solid #CE9461;">
                                        Action
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="mystery" autocomplete="off" value="Mystery & Thriller">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="mystery" style="border: 2px solid #CE9461;">
                                        Mystery & Thriller
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="classics" autocomplete="off" value="Classics">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="classics" style="border: 2px solid #CE9461;">
                                        Classics
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="personalDevelopment" autocomplete="off" value="Personal Development">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="personalDevelopment" style="border: 2px solid #CE9461;">
                                        Personal Development
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="adventure" autocomplete="off" value="Adventure">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="adventure" style="border: 2px solid #CE9461;">
                                        Adventure
                                    </label>
                                    <input type="checkbox" name="interests[]" class="btn-check" id="inspirational" autocomplete="off" value="Inspirational">
                                    <label class="col-3 col-md-3 btn btn-outline-warning text-black m-3 rounded-4 p-4 fw-bold fs-4" for="inspirational" style="border: 2px solid #CE9461;">
                                        Inspirational
                                    </label>
                                </div>
                            </div>
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col text-center">
                                        <button class="btn text-center text-white fw-bold rounded-4 px-5" style="background-color: #CE9461;" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item min-vh-100">
                        <div class="carousel-text w-50 position-absolute top-50 start-50 translate-middle">
                            <h1 class="text-center fw-bold fs-1 text-black mb-5">Well done!</h1>
                            <p class="text-center text-black fs-3 mb-5">You can now explore and enjoy finding books, join communities, and engage in book swapping events!</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col text-center">
                                        <button onclick="form.submit()" class="btn text-center text-white fw-bold rounded-4 px-5" style="background-color: #CE9461;" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">Explore</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>
<script>
    function getImage(event) {
        var image = document.getElementById("img-icon");
        image.src = URL.createObjectURL(event.target.files[0]);
    }

    function explore() {
        var user = document.getElementById('username').value;
        var pass = document.getElementById('password').value;
        var first = document.getElementById('firstName').value;
        var last = document.getElementById('lastName').value;
        var email = document.getElementById('email').value;

        if (user == "" || pass == "") {
            alert("please fill all the inputs");
        } else {
            window.location.href = "#welcome";
        }
    }



    document.getElementById('show-password').addEventListener('mousedown', function() {
        document.querySelector('input[name=password]').setAttribute('type', 'text')
    })

    document.getElementById('show-password').addEventListener('mouseup', function() {
        document.querySelector('input[name=password]').setAttribute('type', 'password')
    })
</script>

</html>