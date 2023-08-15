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

                #wish-list {
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

                #exchange {
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

                #listName, #privacy {
                    background-color: #F1E9E9;
                    border: 1px solid #8A6342;
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
                                        <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="./homepage.php" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Home"><img src="../assets/home.png" alt="home" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Cart"><img src="../assets/shopping-cart.png" alt="shopping" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="./messaging.php" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Messaging"><img src="../assets/message.png" alt="messaging" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 px-3 d-flex justify-content-end" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Notification"><img src="../assets/notif.png" alt="notification" width="35"></a>
                                        <a id="nav-icons" class="nav-link rounded-4 ps-3 d-flex justify-content-end" href="./user-profile.php" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Profile"><img src="../assets/profile.png" alt="profile" width="35"></a>
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
                                        <a id="reviews" class="col m-0 home-anchors" href="./reviews-exchange.php" style="color: #8A6342;">Reviews</a>
                                        <a id="wish-list" class="col m-0 home-anchors" href="#" style="color: #8A6342;">Wish List</a>
                                        <a id="bookshelf" class="col m-0 home-anchors" href="#" style="color: #8A6342;">Bookshelf</a>
                                    </div>
                                </div>
                                <div class="container rounded shadow border" style="background-color: #F6F3F3;">
                                    <div class="row px-3 py-2">
                                        <div class="col d-flex flex-row">
                                            <p class="fw-bold m-0 align-self-center">Start building your list!</p>
                                            <button class="btn text-decoration-underline fw-bold ms-2" style="color: #8A6342;" data-bs-toggle="modal" data-bs-target="#createList">Create</button>
                                        </div>
                                        <div class="col d-flex flex-row justify-content-end">
                                            <label class="align-self-center fw-bold" for="dropD" style="color: #8A6342;">Sort By: </label>
                                            <select class="form-select form-select-sm w-50 px-3 ms-2 text-center text-white fw-bold rounded" id="dropD" aria-label="Default select example" style="background-color: #8A6342;">
                                                <!-- <option selected>Date Added (newest)</option> -->
                                                <option value="Author (A to Z)">Author (A to Z)</option>
                                                <option value="Author(Z to A)">Author(Z to A)</option>
                                                <option value="Date Added(Newest)">Date Added(Newest)</option>
                                                <option value="Date Added(Oldest)">Date Added(Oldest)</option>
                                                <option value="Title(A to Z)">Title(A to Z)</option>
                                                <option value="Title(Z to A)">Title(Z to A)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- POST CONTENTS -->
                                <div class="container mt-4 mb-4 rounded shadow border">
                                    <div class="container">
                                        <div class="d-flex flex-row px-2 py-2">
                                            <h4 class="align-self-center fw-bold" style="color: #8A6342;">Nestine Wish List</h4>
                                            <a class="btn"><img src="../assets/settings-icon.png" alt="icon"></a>
                                        </div>
                                        <div class="row px-2">
                                            <div class="col mx-2 py-0 px-0 mb-3 border text-center" style="background-color: #8A6342;">
                                                <img src="../assets/brown_book.png" alt="book" class="img mt-3 border">
                                                <div class="container-fluid w-100 mt-3 p-2" style="background-color: #B9875D;">
                                                    <p class="m-0 fw-bold" style="color: #4B321D;">Magic Falling</p>
                                                </div>
                                                <a class="m-0 text-decoration-none btn fw-bold" style="color: #4B321D;">See more ></a>
                                            </div>
                                            <div class="col mx-2 py-0 px-0 mb-3 border text-center" style="background-color: #8A6342;">
                                                <img src="../assets/yellow_book.png" alt="book" class="img mt-3 border">
                                                <div class="container-fluid w-100 mt-3 p-2" style="background-color: #B9875D;">
                                                    <p class="m-0 fw-bold" style="color: #4B321D;">Magic Falling</p>
                                                </div>
                                                <a class="m-0 text-decoration-none btn fw-bold" style="color: #4B321D;">See more ></a>
                                            </div>
                                            <div class="col mx-2 py-0 px-0 mb-3 border text-center" style="background-color: #8A6342;">
                                                <img src="../assets/brown_book.png" alt="book" class="img mt-3 border">
                                                <div class="container-fluid w-100 mt-3 p-2" style="background-color: #B9875D;">
                                                    <p class="m-0 fw-bold" style="color: #4B321D;">Magic Falling</p>
                                                </div>
                                                <a class="m-0 text-decoration-none btn fw-bold" style="color: #4B321D;">See more ></a>
                                            </div>
                                            <div class="col mx-2 py-0 px-0 mb-3 border text-center" style="background-color: #8A6342;">
                                                <img src="../assets/yellow_book.png" alt="book" class="img mt-3 border">
                                                <div class="container-fluid w-100 mt-3 p-2" style="background-color: #B9875D;">
                                                    <p class="m-0 fw-bold" style="color: #4B321D;">Magic Falling</p>
                                                </div>
                                                <a class="m-0 text-decoration-none btn fw-bold" style="color: #4B321D;">See more ></a>
                                            </div>
                                            <div class="progress px-0 mb-3" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar btn rounded-end" style="width: 10%; background-color: #DEA057;"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <!-- Create List modal -->
                <div class="modal fade" id="createList" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content rounded-4">
                            <div class="modal-header">
                                <h1 class="modal-title text-center w-100 fw-bold fs-5" id="staticBackdropLabel">Create List</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-5">
                                <p class="fs-5 text-start">All lists are private unless you share them with public. You can share your lists after you’ve created a list.</p>

                                <label class="fw-bold" for="listName" style="color: #8A6342;">List Name</label> <br>
                                <input class="form-control fw-bold rounded-4 mb-2 fs-5" id="listName" type="text" placeholder="Enter you list name" style="color: #8A6342;">
                            </div>
                            <div class="modal-footer py-0">
                                <button type="button" class="btn text-white fw-bold rounded-pill px-4" data-bs-dismiss="modal" aria-label="Close" style="background-color: #CE9461;">Cancel</button>
                                <button type="button" class="btn text-white fw-bold rounded-pill px-4" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#wishListSettings" style="background-color: #CE9461;" onclick="wishNext()">Next</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wish List Settings Modal -->
                <div class="modal fade" id="wishListSettings" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content rounded-4">
                            <div class="modal-header">
                                <h1 class="modal-title text-center w-100 fw-bold fs-5" id="staticBackdropLabel">Wish List Settings</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body px-5">
                                <label class="fw-bold" for="listName" style="color: #8A6342;">List Name</label> <br>
                                <input class="form-control fw-bold rounded-4 mb-2 fs-5" id="listNameWish" type="text" placeholder="Enter you list name" style="color: #8A6342;">

                                <label class="fw-bold" for="privacy" style="color: #8A6342;">Privacy</label> <br>
                                <!-- <input class="form-control fw-bold rounded-4 mb-2 fs-5" id="privacy" type="text" placeholder="Enter you list name" style="color: #8A6342;"> -->
                                <select name="privacy" id="privacy" class="form-select fw-bold rounded-4 mb-2 fs-5" style="color: #8A6342;">
                                    <option value="Public">Public</option>
                                    <option value="Private">Private</option>
                                </select>
                            </div>
                            <div class="modal-footer py-0">
                                <button type="button" class="btn text-white fw-bold rounded-pill px-4" data-bs-dismiss="modal" aria-label="Close" style="background-color: #CE9461;">Cancel</button>
                                <button type="button" class="btn text-white fw-bold rounded-pill px-4" data-bs-dismiss="modal" style="background-color: #CE9461;">Save</button><br>
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
                
                function wishNext() {
                    const list_name = document.getElementById("listName").value;
                    document.getElementById("listNameWish").value = list_name;                    
                }

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