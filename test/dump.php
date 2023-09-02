<!doctype html>
<html>
<body>
<form method="post">
    <input type="checkbox" name="test" value="0"/>
    <input type="checkbox" name="test" value="1"/>
    <input type="checkbox" name="test" value="2"/>
    <input type="checkbox" name="test" value="3"/>
    <input type="checkbox" name="test" value="4"/>
    <input type="submit"/>
</form>

<pre><?php var_dump($_POST); ?></pre>
</body>
</html>

<!-- ZOMBIE -->
<?php
// include "./php-queries/connection.php";
// session_start();

// $user = $_SESSION["Username"];
// $pass = $_SESSION["Password"];
// $id = $_SESSION["id"];

// try {
//     // SELECT book_sale_post.*, users.FirstName, users.LastName, users.ProfilePhoto FROM book_sale_post INNER JOIN users ON book_sale_post.sale_user_ID = users.id
//     $sql = "SELECT * FROM `users` WHERE Username = '$user' && Password = '$pass'";
//     $result = $conn->query($sql);
//     $row = $result->fetch_assoc();

//     if ($row) {
//         try {
//             $sqlPostSale = "SELECT book_sale_post.*, users.* FROM book_sale_post INNER JOIN users ON users.id = book_sale_post.sale_user_ID WHERE users.id = '$id'";
//             $result_query_sale = $conn->query($sqlPostSale);

//             $sqlPostExchange = "SELECT book_exchange_post.*, users.* FROM book_exchange_post INNER JOIN users ON users.id = book_exchange_post.exchange_user_ID WHERE users.id = '$id'";
//             $result_query_exchange = $conn->query($sqlPostExchange);

//             $sqlPostRent = "SELECT book_rent_post.*, users.* FROM book_rent_post INNER JOIN users ON users.id = book_rent_post.rent_user_ID WHERE users.id = '$id'";
//             $result_query_rent = $conn->query($sqlPostRent);

// $sqlPost = "";
?>
<!-- <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>BookLoopPH | Home</title>
                <link rel="icon" href="../assets/bookloopph-website-favicon-white.png">
                <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">                
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

                #posts {
                    border-bottom: 2px solid #8A6342;
                }

                p {
                    color: #8A6342;
                }

                #post-button:hover {
                    background-color: #8A6342;
                }

                #post-button:hover p {
                    color: #FFF;
                }
            </style>

            <body>
                <div class="container-fluid p-0 pb-4"> -->
<!-- NAV -->
<!-- <nav id="navbar" class="navbar navbar-expand-lg w-100 shadow bg-white fixed-top" style="border-bottom: 2px solid #CE9461;">
                        <div class="container-fluid px-5">
                            <div class="row w-100">
                                <a class="col-1 navbar-brand rounded-circle text-center" href="#">
                                    <img id="logo" class="img-fluid" src="../assets/bookloopph-website-favicon-white.png" alt="Bootstrap" width="60">
                                </a>
                                <div class="col-lg-7 col-9 d-flex px-2 justify-content-end">
                                    <input class="form-control search-input w-50 me-2" type="search" placeholder="Search" aria-label="Search" style="background-color: #FAEBD9;" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Search what your looking for">
                                </div>
                                <button class="col-1 ms-5 justify-content-end navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="col-3 col-lg-1 collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                                    <div class="navbar-nav px-2">
                                        <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Home"><img src="../assets/home.png" alt="home" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Cart"><img src="../assets/shopping-cart.png" alt="shopping" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="./messaging.php" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Messaging"><img src="../assets/message.png" alt="messaging" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Notification"><img src="../assets/notif.png" alt="notification" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 ps-3 d-flex justify-content-end" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Profile"><img src="../assets/profile.png" alt="profile" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 ps-3 d-flex justify-content-end" href="./login.php" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Logout"><img src="../assets/logout.png" alt="logout" width="35"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav> -->

<!-- HERO -->
<!-- <div class="offset container-fluid px-5" style="margin-top: 7em;">
                        <h3 class=" ms-5 fw-bold">New Arrival</h3>
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner text-center" style="color: #8A6342;">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <button class="col-1 btn" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                                <img src="../assets/double arrow left.png" alt="arrow-icons" width="50">
                                            </button>
                                            <div class="col">
                                                <img src="../assets/city_limits.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">City Limits</h5>
                                                <p class="m-0">Thriller</p>
                                                <h5 class="fw-bold m-0">P150.00</h5>
                                            </div>
                                            <div class="col">
                                                <img src="../assets/your_title_here.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">Your Title Here</h5>
                                                <p class="m-0">Young Adult</p>
                                                <h5 class="fw-bold m-0">P100.00</h5>
                                            </div>
                                            <div class="col">
                                                <img src="../assets/bubble_bath.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">Bubble Bath</h5>
                                                <p class="m-0">Children Book</p>
                                                <h5 class="fw-bold m-0">P150.00</h5>
                                            </div>
                                            <div class="col">
                                                <img src="../assets/city_of_secrets.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">City of Secrets</h5>
                                                <p class="m-0">Mystery</p>
                                                <h5 class="fw-bold m-0">P200.00</h5>
                                            </div>
                                            <button class="col-1 btn" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                                <img src="../assets/double arrow right.png" alt="arrpw-icons" width="50">
                                            </button>
                                        </div>
                                    </div> -->
<!-- <img src="../assets/nestine.png" class="d-block mx-auto w-25" alt="profile"> -->
<!-- <h3 class="fw-bold mt-3">Nestine Nicole Navarro</h3>
                                    <div class="d-flex flex-column">
                                        <a class="text-decoration-none fw-bold fs-5 mt-4" target="_blank" href="https://web.facebook.com/profile.php?id=100010045873883" style="color: #8A6342;"><i><img src="../assets/facebook-icon.png" alt="facebook-icon"></i> www.facebook.com</a>
                                        <a class="text-decoration-none fw-bold fs-5 mt-2" target="_blank" href="https://github.com/catmer29" style="color: #8A6342;"><i><img src="../assets/github-mark.png" alt="facebook-icon" width="30"></i> www.github.com</a>
                                    </div> -->
<!-- </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <button class="col-1 btn" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                                <img src="../assets/double arrow left.png" alt="arrow-icons" width="50">
                                            </button>
                                            <div class="col">
                                                <img src="../assets/city_limits.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">City Limits</h5>
                                                <p class="m-0">Thriller</p>
                                                <h5 class="fw-bold m-0">P150.00</h5>
                                            </div>
                                            <div class="col">
                                                <img src="../assets/your_title_here.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">Your Title Here</h5>
                                                <p class="m-0">Young Adult</p>
                                                <h5 class="fw-bold m-0">P100.00</h5>
                                            </div>
                                            <div class="col">
                                                <img src="../assets/bubble_bath.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">Bubble Bath</h5>
                                                <p class="m-0">Children Book</p>
                                                <h5 class="fw-bold m-0">P150.00</h5>
                                            </div>
                                            <div class="col">
                                                <img src="../assets/city_of_secrets.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">City of Secrets</h5>
                                                <p class="m-0">Mystery</p>
                                                <h5 class="fw-bold m-0">P200.00</h5>
                                            </div>
                                            <button class="col-1 btn" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                                <img src="../assets/double arrow right.png" alt="arrpw-icons" width="50">
                                            </button>
                                        </div>
                                    </div> -->
<!-- <img src="../assets/Eubert.png" class="d-block mx-auto w-25" alt="profile">
                                    <h3 class="fw-bold mt-3">Marc Eubert Contado</h3>
                                    <div class="d-flex flex-column">
                                        <a class="text-decoration-none fw-bold fs-5 mt-4" target="_blank" href="https://web.facebook.com/marceubert.contado" style="color: #8A6342;"><i><img src="../assets/facebook-icon.png" alt="facebook-icon"></i> www.facebook.com</a>
                                        <a class="text-decoration-none fw-bold fs-5 mt-2" target="_blank" href="https://github.com/eubert369" style="color: #8A6342;"><i><img src="../assets/github-mark.png" alt="facebook-icon" width="30"></i> www.github.com</a>
                                    </div> -->
<!-- </div>
                                <div class="carousel-item">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <button class="col-1 btn" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                                <img src="../assets/double arrow left.png" alt="arrow-icons" width="50">
                                            </button>
                                            <div class="col">
                                                <img src="../assets/city_limits.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">City Limits</h5>
                                                <p class="m-0">Thriller</p>
                                                <h5 class="fw-bold m-0">P150.00</h5>
                                            </div>
                                            <div class="col">
                                                <img src="../assets/your_title_here.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">Your Title Here</h5>
                                                <p class="m-0">Young Adult</p>
                                                <h5 class="fw-bold m-0">P100.00</h5>
                                            </div>
                                            <div class="col">
                                                <img src="../assets/bubble_bath.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">Bubble Bath</h5>
                                                <p class="m-0">Children Book</p>
                                                <h5 class="fw-bold m-0">P150.00</h5>
                                            </div>
                                            <div class="col">
                                                <img src="../assets/city_of_secrets.png" alt="book" class="img" height="200">
                                                <h5 class="fw-bold m-0">City of Secrets</h5>
                                                <p class="m-0">Mystery</p>
                                                <h5 class="fw-bold m-0">P200.00</h5>
                                            </div>
                                            <button class="col-1 btn" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                                <img src="../assets/double arrow right.png" alt="arrpw-icons" width="50">
                                            </button>
                                        </div>
                                    </div> -->
<!-- <img src="../assets/osama.png" class="d-block mx-auto w-25" alt="profile">
                                    <h3 class="fw-bold mt-3">O'sama Velasco</h3>
                                    <div class="d-flex flex-column">
                                        <a class="text-decoration-none fw-bold fs-5 mt-4" target="_blank" href="https://web.facebook.com/cham.velasco" style="color: #8A6342;"><i><img src="../assets/facebook-icon.png" alt="facebook-icon"></i> www.facebook.com</a>
                                        <a class="text-decoration-none fw-bold fs-5 mt-2" target="_blank" href="https://github.com/bbezechiela" style="color: #8A6342;"><i><img src="../assets/github-mark.png" alt="facebook-icon" width="30"></i> www.github.com</a>
                                    </div> -->
<!-- </div>
                            </div> -->
<!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <img src="../assets/double arrow left.png" alt="arrow-icons" width="50">
                            </button> -->
<!-- <button class="carousel-control-prev px-0 border" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <img src="../assets/double arrow left.png" alt="arrow-icons" width="50">
                                <span class="carousel-control-prev-icon m-0" aria-hidden="true"></span>
                                <span class="visually-hidden text-black m-0 border"></span>
                            </button> -->
<!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <img src="../assets/double arrow right.png" alt="arrpw-icons" width="50">                                
                            </button> -->
<!-- </div> -->

<!-- Post to shop -->
<!-- <div class="container-fluid mt-5 px-5">
                            <div class="row justify-content-center mb-4">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="card border-0 rounded" style="background-color: #F1F1F1;">
                                        <div class="card-body text-center">
                                            <img src="../assets/Crime and Thriller 1.png" alt="crime and thriller">
                                        </div>
                                        <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                            <div class="flex-grow-1 d-grid">
                                                <span class="fs-4">Crime and Thriller</span>
                                                <span>Discover a dark new corner</span>
                                            </div>
                                            <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="card border-0 rounded" style="background-color: #F1F1F1;">
                                        <div class="card-body text-center">
                                            <img src="../assets/romance and saga.png" alt="crime and thriller">
                                        </div>
                                        <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                            <div class="flex-grow-1 d-grid">
                                                <span class="fs-4">Romance and Saga</span>
                                                <span>Discover a new love affair</span>
                                            </div>
                                            <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="card border-0 rounded" style="background-color: #F1F1F1;">
                                        <div class="card-body text-center">
                                            <img src="../assets/modern 1.png" alt="crime and thriller">
                                        </div>
                                        <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                            <div class="flex-grow-1 d-grid">
                                                <span class="fs-4">Modern</span>
                                                <span>Discover a new feel good tale</span>
                                            </div>
                                            <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="card border-0 rounded" style="background-color: #F1F1F1;">
                                        <div class="card-body text-center">
                                            <img src="../assets/Fantasy and Adventure 1.png" alt="crime and thriller">
                                        </div>
                                        <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                            <div class="flex-grow-1 d-grid">
                                                <span class="fs-4">Fantasy and Adventure</span>
                                                <span>Embark on extraordinary quests</span>
                                            </div>
                                            <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="card border-0 rounded" style="background-color: #F1F1F1;">
                                        <div class="card-body text-center">
                                            <img src="../assets/Science fiction 1.png" alt="crime and thriller">
                                        </div>
                                        <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                            <div class="flex-grow-1 d-grid">
                                                <span class="fs-4">Science Fiction</span>
                                                <span>Explore futuristic worlds</span>
                                            </div>
                                            <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <div class="card border-0 rounded" style="background-color: #F1F1F1;">
                                        <div class="card-body text-center">
                                            <img src="../assets/comedy and satire 1.png" alt="crime and thriller">
                                        </div>
                                        <div class="card-footer d-flex flex-row align-items-center bg-transparent  border-3">
                                            <div class="flex-grow-1 d-grid">
                                                <span class="fs-4">Comedy and Satire</span>
                                                <span>Indulge in laughter and wit</span>
                                            </div>
                                            <a href="#" class="btn text-white" style="background-color: #8A6342;">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
            <script src="..//bootstrap/bootstrap.bundle.min.js"></script>
            <script>
                const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
                const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

                const createPost = new bootstrap.Modal(document.getElementById('createPost'), {
                    keyboard: false
                });

                const forSale = new bootstrap.Modal(document.getElementById('for-sale'), {

                });

                const forExchange = new bootstrap.Modal(document.getElementById('for-exchange'), {
                    keyboard: false
                });

                const forRent = new bootstrap.Modal(document.getElementById('for-rent'), {
                    keyboard: false
                });

                function newPost() {
                    var post_value = document.getElementById("newPost").value;

                    if (post_value == "FOR SALE") {
                        forSale.show();
                    } else if (post_value == "FOR EXCHANGE") {
                        forExchange.show();
                    } else if (post_value == "FOR RENT") {
                        forRent.show();
                    }
                } -->

<!-- // image
                const saleImage = document.getElementById("imageSale");
                const saleImagePreview = document.getElementById("img-sale");

                const exchangeImage = document.getElementById("imageExchange");
                const exchangeImagePreview = document.getElementById("img-exchange");

                const rentImage = document.getElementById("imageRent");
                const rentimagePreview = document.getElementById("img-rent");

                saleImage.onchange = function() {
                    const selectedFile = event.target.files[0];

                    if (selectedFile) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            saleImagePreview.src = e.target.result;
                        }
                        reader.readAsDataURL(selectedFile);
                    }
                }

                exchangeImage.onchange = function() {
                    const selectedFile = event.target.files[0];

                    if (selectedFile) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            exchangeImagePreview.src = e.target.result;
                        }
                        reader.readAsDataURL(selectedFile);
                    }
                }

                rentImage.onchange = function() {
                    const selectedFile = event.target.files[0];

                    if (selectedFile) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            rentimagePreview.src = e.target.result;
                        }
                        reader.readAsDataURL(selectedFile);
                    }
                }

                // function getImageSale(event) {
                //     var image = document.getElementById("img-sale");
                //     image.src = URL.createObjectURL(event.files[0]);
                // }

                // function getImageExchange(event) {
                //     var image = document.getElementById("img-exchange");
                //     image.src = URL.createObjectURL(event.files[0]);
                // }
            </script> -->

<!-- </html> -->
<?php
//         } catch (\Exception $th) {
//             echo $th;
//         }
//     } else {
//         // echo '<p class="text-danger text-center mt-2 fw-bold">Invalid username or password</p>';
//         // header("Location: login.php");
//     }
// } catch (\Throwable $th) {
//     echo $th;
// }
?>