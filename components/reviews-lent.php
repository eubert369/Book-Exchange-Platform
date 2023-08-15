<?php
include "./php-queries/connection.php";
session_start();

$user = $_SESSION["Username"];
$pass = $_SESSION["Password"];
$id = $_SESSION["id"];

try {
    // SELECT book_sale_post.*, users.FirstName, users.LastName, users.ProfilePhoto FROM book_sale_post INNER JOIN users ON book_sale_post.sale_user_ID = users.id
    $sql = "SELECT * FROM `users` WHERE Username = '$user' && Password = '$pass'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    if ($row) {
        try {
            $sqlPostSale = "SELECT book_sale_post.*, users.* FROM book_sale_post INNER JOIN users ON book_sale_post.sale_user_ID = users.id";
            $result_query_sale = $conn->query($sqlPostSale);

            $sqlPostExchange = "SELECT book_exchange_post.*, users.* FROM book_exchange_post INNER JOIN users ON book_exchange_post.exchange_user_ID = users.id";
            $result_query_exchange = $conn->query($sqlPostExchange);

            $sqlPostRent = "SELECT book_rent_post.*, users.* FROM book_rent_post INNER JOIN users ON book_rent_post.rent_user_ID = users.id";
            $result_query_rent = $conn->query($sqlPostRent);

            // $sqlPost = "";
?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>BookLoopPH | Home</title>
                <link rel="icon" href="../assets/bookloopph-website-favicon-white.png">
                <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
                <!-- <link rel="stylesheet" href="../components/css/style.css" type="text/css"> -->
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

                #reviews {
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

                #lent {
                    background-color: #92844F5C;
                }

                #exchange-btn {
                    background-color: white;
                    font-size: 15px;
                }

                #exchange-btn:hover {
                    background-color: #92844F5C;
                    text-decoration: underline;
                }

                #review-btn {
                    color: #8A6342;
                    border: 1px solid #8A6342;
                }

                #review-btn:hover {
                    color: #fff;
                    border: 1px solid #8A6342;
                    background-color: #8A6342;
                }

                #view-details-btn {
                    color: #8A6342;
                    border: 1px solid #8A6342;
                }

                #view-details-btn:hover {
                    color: #fff;
                    background-color: #8A6342;
                }
            </style>

            <body>
                <div class="container-fluid p-0 pb-4">
                    <!-- NAV -->
                    <nav id="navbar" class="navbar navbar-expand-lg w-100 shadow bg-white fixed-top" style="border-bottom: 2px solid #CE9461;">
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
                                        <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Messaging"><img src="../assets/message.png" alt="messaging" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Notification"><img src="../assets/notif.png" alt="notification" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 ps-3 d-flex justify-content-end" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Profile"><img src="../assets/profile.png" alt="profile" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 ps-3 d-flex justify-content-end" href="./login.php" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Logout"><img src="../assets/logout.png" alt="logout" width="35"></a>
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
                                <!-- MINI-PROFILE INFO -->
                                <div class="container px-5 shadow rounded">
                                    <div class="row border-bottom rounded-top p-4">
                                        <?php
                                        // echo '<img src="data:image/jpeg;base64,' . base64_encode($row["ProfilePhoto"]) . '" alt="' . $imageName . '">'
                                        echo '<img class="col-3 img rounded-circle" src="data:image/jpeg;base64,' . base64_encode($row["ProfilePhoto"]) . '" alt="profile">';
                                        ?>
                                        <div class="col" style="color: #8A6342;">
                                            <?php
                                            echo '<h2 id="name" class="fw-bold">' . $row["FirstName"] . ' ' . $row["LastName"] . '</h2>';
                                            ?>
                                            <p>
                                                2.9K Followers . 500 Following <br>
                                                Lives in <?php echo $row["Address"]; ?>
                                            </p>
                                        </div>
                                        <div class="col-1">
                                            <button class="btn" id="create-post" href="#" data-bs-toggle="modal" data-bs-target="#createPost"><img src="../assets/writing-square.png" alt="edit-profile" width="40" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Create Post"></button>
                                        </div>
                                        <div class="container-fluid mt-3">
                                            <div class="row">
                                                <div class="col-5 px-4 py-2 rounded rounded-4" style="background-color: #FAEBD9; color: #8A6342;">
                                                    <h4 class="fw-medium">Interests</h4>
                                                    <p>
                                                        <?php
                                                        $interest = unserialize($row["Interests"]);
                                                        foreach ($interest as $item) {
                                                            echo $item . ', ';
                                                        }
                                                        ?>
                                                    </p>
                                                    <!-- <p>Crime & Thriller, Mystery & Suspense and <a class="text-decoration-none fw-bold" href="#" style="color: #8A6342;">2 more</a></p> -->
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
                                        <a id="posts" class="col m-0 home-anchors" href="./user-profile.php" style="color: #8A6342;">Posts</a>
                                        <a id="liked" class="col m-0 home-anchors" href="./likes.php" style="color: #8A6342;">Liked</a>
                                        <a id="reviews" class="col m-0 home-anchors" href="#" style="color: #8A6342;">Reviews</a>
                                        <a id="wish-list" class="col m-0 home-anchors" href="./wishList.php" style="color: #8A6342;">Wish List</a>
                                        <a id="bookshelf" class="col m-0 home-anchors" href="#" style="color: #8A6342;">Bookshelf</a>
                                    </div>
                                </div>
                                <div class="container rounded border">
                                    <div class="row text-center fw-bold">
                                        <a id="exchange-btn" class="col btn fw-bold p-2" href="./reviews-exchange.php" style="color: #8A6342;">
                                            Exchange Rating
                                        </a>
                                        <a id="exchange-btn" class="col btn fw-bold p-2" href="./reviews-rented.php" style="color: #8A6342;">
                                            Rented Rating
                                        </a>
                                        <a id="exchange-btn lent" class="col btn fw-bold p-2" style="color: #8A6342;">
                                            Lent Rating
                                        </a>
                                        <a id="exchange-btn" class="col btn fw-bold p-2" href="./reviews-sold.php" style="color: #8A6342;">
                                            Sold Rating
                                        </a>
                                        <a id="exchange-btn" class="col btn fw-bold p-2" href="./reviews-bought.php" style="color: #8A6342;">
                                            Bought Rating
                                        </a>
                                    </div>
                                </div>
                                <div class="container rounded shadow border">
                                    <div class="row text-center fw-bold">
                                        <div class="col" style="color: #8A6342;">
                                            <h4 class="fw-bold mt-3">4.9</h4>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/icons_star_none.png" alt="star" width="20"></i>
                                        </div>
                                        <div class="col d-flex flex-column p-2">
                                            <button id="review-btn" class="btn fw-bold rounded mb-2">ALL (10)</button>
                                            <button id="review-btn" class="btn fw-bold rounded">3 Star (10)</button>
                                        </div>
                                        <div class="col d-flex flex-column p-2">
                                            <button id="review-btn" class="btn fw-bold rounded mb-2">5 Star (10)</button>
                                            <button id="review-btn" class="btn fw-bold rounded">2 Star (10)</button>
                                        </div>
                                        <div class="col d-flex flex-column p-2">
                                            <button id="review-btn" class="btn fw-bold rounded mb-2">4 Star (10)</button>
                                            <button id="review-btn" class="btn fw-bold rounded">1 Star (10)</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- POST CONTENTS -->
                                <div class="container mt-4 rounded shadow border">
                                    <div class="row p-3">
                                        <div class="col-1 p-2">
                                            <i><img class="rounded-circle" src="../assets/accounts.png" alt="icon" width="50"></i>
                                        </div>
                                        <div class="col-3 p-2">
                                            <h5 class="m-0 fw-bold" style="color: #8A6342;">g***rt3</h5>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/icons_star_none.png" alt="star" width="20"></i>
                                            <p class="fw-bold mb-0 mt-3">Lent</p>
                                            <p class="m-0">Harry Potter</p>
                                            <p class="m-0">22/07/2023 11:03</p>
                                            <button id="view-details-btn" class="btn fw-bold fs-6 mt-3" data-bs-toggle="modal" data-bs-target="#exchangeRating">View Details</button>
                                        </div>
                                        <div class="col p-2">
                                            <img src="../assets/book-template.png" alt="book-image">
                                        </div>
                                        <div class="col-2 p-2">
                                            <div class="d-flex justify-content-end">
                                                <a class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <img src="../assets/dot-menu.png" alt="menu">
                                                </a>
                                                <ul class="dropdown-menu" style="background-color: #EAEAEA;">
                                                    <li><a class="dropdown-item" href="#">Reply</a></li>
                                                    <li><a class="dropdown-item" href="#">Report</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <!-- Exchange Rating modal -->
                <div class="modal fade" id="exchangeRating" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content rounded-4">
                            <div class="modal-header">
                                <h1 class="modal-title text-center w-100 fw-bold fs-5" id="staticBackdropLabel">Create New Post</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body ">
                                <div class="container">
                                    <div class="row mx-5">
                                        <div class="col-2">
                                            <i><img class="rounded-circle" src="../assets/accounts.png" alt="profile-image" width="70"></i>
                                        </div>
                                        <div class="col">
                                            <h5 class="m-0 fw-bold" style="color: #8A6342;">g***rt3</h5>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/start-icon.png" alt="star" width="20"></i>
                                            <i><img src="../assets/icons_star_none.png" alt="star" width="20"></i>
                                            <p class="fw-bold mb-2 mt-3">Lent</p>
                                            <p class="mb-2">Harry Potter</p>
                                            <p class="mb-2">22/07/2023, 11:03</p>

                                            <p class="mt-4"><b>Condition:</b> 10/10</p>
                                            <p class=""><b>Accuracy of Description:</b> 10/10</p>
                                            <p class=""><b>Interaction:</b> 10/10</p>
                                            <p class=""><b>Condition:</b> 10/10</p>
                                            <p class="">Nice book. Good job exchanger!</p>
                                        </div>
                                        <div class="col">
                                            <img class="img-fluid w-100" src="../assets/book-template.png" alt="book-image">
                                            <div class="w-100 d-flex justify-content-end">
                                                <a class="mt-2 fw-bold mx-2" href="#" style="color: #8A6342;">Reply</a>
                                                <a class="mt-2 fw-bold mx-2" href="#" style="color: #8A6342;">Report</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-2 py-3 px-3 mb-5 w-100">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-2 text-end">
                                            <i><img src="../assets/accounts.png" alt="commenter-profile"></i>
                                        </div>
                                        <div class="col">
                                            <h5 class="fw-bold" style="color: #8A6342;">Nestine Nicole Navarro</h5>
                                            <p class="mb-0">Thank you so much!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn text-white fw-bold rounded-pill px-4" data-bs-dismiss="modal" style="background-color: #CE9461;" onclick="newPost()">Next</button>
                            </div> -->
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



                // const forSale = new bootstrap.Modal(document.getElementById('for-sale'), {

                // });

                // const forExchange = new bootstrap.Modal(document.getElementById('for-exchange'), {
                //     keyboard: false
                // });

                // const forRent = new bootstrap.Modal(document.getElementById('for-rent'), {
                //     keyboard: false
                // });

                // function newPost() {
                //     var post_value = document.getElementById("newPost").value;

                //     if (post_value == "FOR SALE") {
                //         forSale.show();
                //     } else if (post_value == "FOR EXCHANGE") {
                //         forExchange.show();
                //     } else if (post_value == "FOR RENT") {
                //         forRent.show();
                //     }
                // }

                // image
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
            </script>

            </html>
<?php
        } catch (\Exception $th) {
            echo $th;
        }
    } else {
        // echo '<p class="text-danger text-center mt-2 fw-bold">Invalid username or password</p>';
        header("Location: login.php");
    }
} catch (\Throwable $th) {
    echo $th;
}
?>