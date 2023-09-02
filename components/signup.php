<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookRedux | Signup</title>
    <link rel="icon" href="../assets/Book_Logo.png">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <link href="../aos-master/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid p-4">
        <a href="../index.php" class="position-absolute mx-4 my-1 navbar-brand pb-3 px-2" data-aos="fade-right" data-aos-duration="2000"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
        <h2 id="create-acct" class="text-center fw-bold mx-auto w-50 pb-1" data-aos="fade-down" data-aos-duration="1500">Create Account</h2>
        <form id="form" action="./php-queries/create.php?signup=create" method="post" enctype="multipart/form-data">
            <div class="row px-0">
                <div class="col px-0 py-0 mx-2">
                    <div class="border border-2 shadow fillup-form pb-3" data-aos="zoom-in-right" data-aos-duration="1500">
                        <div class="orange-design"></div>
                        <div class="d-flex px-3 py-2 pb-4 flex-row">
                            <div class="d-flex justify-content-center flex-column w-50">
                                <div class="mx-2 d-flex justify-content-center">
                                    <!-- <label for="firstName">First Name</label> -->
                                    <input class="w-75 mt-3 fs-6 px-2" id="firstName" name="first_name" type="text" placeholder="First Name" required>
                                </div>
                                <div class="mx-2 d-flex justify-content-center">
                                    <!-- <label for="email">Email</label> -->
                                    <input class="w-75 mt-3 fs-6 px-2" id="email" name="email" type="email" placeholder="Email" required>
                                </div>
                                <div class="mx-2 d-flex justify-content-center">
                                    <!-- <label for="address">Address</label> -->
                                    <input class="w-75 mt-3 fs-6 px-2" id="address" name="address" type="text" placeholder="Address" required>
                                </div>
                                <div class="mx-2 d-flex justify-content-center">
                                    <!-- <label for="gender">Gender</label> <br> -->
                                    <select class="w-75 mt-4 fs-6 px-2" name="gender" id="gender" required>
                                        <option value="" disabled selected>Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center flex-column w-50">
                                <div class="mx-2 d-flex justify-content-center">
                                    <!-- <label for="lastName">Last Name</label> -->
                                    <input class="w-75 mt-3 fs-6 px-2" id="lastName" name="last_name" type="text" placeholder="Last Name" required>
                                </div>
                                <div class="mx-2 d-flex justify-content-center">
                                    <!-- <label for="phoneNumber">Phone Number</label> -->
                                    <input class="w-75 mt-3 fs-6 px-2" id="phoneNumber" name="phone_number" type="text" placeholder="Phone Number" required>
                                </div>
                                <div class="mx-2 d-flex justify-content-center">
                                    <!-- <label for="birthday">Birthday</label> -->
                                    <input class="w-75 mt-3 fs-6 px-2" id="birthday" name="birthday" type="text" placeholder="Birthday" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>
                                </div>
                                <div class="mx-2 d-flex justify-content-center">
                                    <!-- <label for="age">Age</label> -->
                                    <input class="w-75 mt-3 fs-6 px-2" id="age" name="age" type="number" placeholder="Age" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border border-2 shadow mt-4 fillup-form pb-3" data-aos="zoom-in-up" data-aos-duration="2500">
                        <div class="orange-design"></div>
                        <div class="container-fluid px-4 py-2">
                            <p>Kindly select genres that you are interested</p>
                            <div class="row px-3">
                                <div class="col">
                                    <input type="checkbox" name="interest[]" id="educational" value="Educational">
                                    <label for="educational">Educational</label><br>
                                    <input type="checkbox" name="interest[]" id="romance" value="Romance & Saga">
                                    <label for="romance">Romance & Saga</label><br>
                                    <input type="checkbox" name="interest[]" id="fantasy" value="Fantasy & Adventure">
                                    <label for="fantasy">Fantasy & Adventure</label><br>
                                    <input type="checkbox" name="interest[]" id="science" value="Science Fiction">
                                    <label for="science">Science Fiction</label><br>
                                    <input type="checkbox" name="interest[]" id="history" value="Historical Fiction">
                                    <label for="history">Historical Fiction</label>
                                </div>
                                <div class="col">
                                    <input type="checkbox" name="interest[]" id="mystery" value="Mystery & Suspense">
                                    <label for="mystery">Mystery & Suspense</label><br>
                                    <input type="checkbox" name="interest[]" id="youngAdult" value="Young Adult">
                                    <label for="youngAdult">Young Adult</label><br>
                                    <input type="checkbox" name="interest[]" id="non-fiction" value="Non-Fiction & Biography">
                                    <label for="non-fiction">Non-Fiction & Biography</label><br>
                                    <input type="checkbox" name="interest[]" id="horror" value="Horror & Supernatural">
                                    <label for="horror">Horror & Supernatural</label><br>
                                    <input type="checkbox" name="interest[]" id="comedy" value="Comedy & Satire">
                                    <label for="comedy">Comedy & Satire</label>
                                </div>
                                <siv class="col">
                                    <input type="checkbox" name="interest[]" id="poetry" value="Poetry & Prose">
                                    <label for="poetry">Poetry & Prose</label><br>
                                    <input type="checkbox" name="interest[]" id="self-help" value="Self-Help">
                                    <label for="self-help">Self-Help</label><br>
                                    <input type="checkbox" name="interest[]" id="crime" value="Crime & Thriller">
                                    <label for="crime">Crime & Thriller</label>
                                </siv>
                            </div>
                        </div>
                        <!-- <div class="orange-design" style="background-color: white;"></div> -->
                    </div>

                </div>
                <div class="col-4 mx-2">
                    <div class="border border-2 shadow" data-aos="zoom-in-right" data-aos-duration="3000">
                        <div class="orange-design"></div>
                        <div class="px-5 pb-4 fillup-form">
                            <!-- <label for="username">Username</label> -->
                            <input class="w-100 fs-6 mb-3 px-2" id="username" name="username" type="text" placeholder="Username" required>
                            <!-- <label for="password">Password</label> -->
                            <input class="w-100 fs-5 mb-2 px-2" id="password" name="password" type="password" placeholder="Password" required>
                            <span id="pass-tip" class="mb-3"></span><br>
                            <input type="checkbox" id="show-password" class="ms-2 mb-3">
                            <label for="show-password">Show Password</label> <br>
                            <span class="text-secondary">
                                <!-- 8 character minimum, case-sensitive.<br> -->
                                Tip: Use upper and lowercase, numbers, and symbols for strong passwords.
                            </span>
                        </div>
                    </div>

                    <div class="border border-2 mt-4 shadow" data-aos="zoom-in-left" data-aos-duration="2500">
                        <div class="orange-design"></div>
                        <div class="d-flex flex-column px-5 pb-3">
                            <p class="text-center fw-bold fs-5">Upload Profile Photo</p>
                            <img class="img mx-auto rounded-circle border" id="img-icon" src="../assets/accounts.png" alt="upload_profile" style="width: 120px;">
                            <input type="file" class="d-none" id="profileUpload" name="profile_photo" required>
                            <label for="profileUpload" class="btn w-100 w-50 mx-auto mt-3 upload-btn fw-bold">Upload</label>
                            <!-- <button class="btn w-100 w-50 mx-auto mt-3 upload-btn fw-bold">Upload</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-2 mb-5" data-aos="zoom-in-up" data-aos-duration="1000">
                <button type="submit" id="sign-up" class="sign-up-btn btn mx-auto w-25 fw-bold">Sign Up</button>
                <p class="mt-3">Already have an account? <a href="./login.php">Click here!</a></p>
            </div>
        </form>
    </div>
</body>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>
<script src="../aos-master/dist/aos.js"></script>
<script>
    AOS.init();

    var uploaded_image = document.getElementById("profileUpload");
    var show_password = document.getElementById("show-password");
    var boolValue = 0;

    var pass = document.getElementById("password");
    var submit_btn = document.getElementById("sign-up");

    uploaded_image.addEventListener("change", function() {
        var image = document.getElementById("img-icon");
        image.src = URL.createObjectURL(event.target.files[0]);
    });
    
    show_password.addEventListener("change", function() {
        if (boolValue == 0) {
            document.getElementById("password").setAttribute('type', 'text');
            boolValue = 1;
        } else {
            document.getElementById("password").setAttribute('type', 'password');
            boolValue = 0;
        }
    });

    pass.addEventListener("input", function() {
        var tip = document.getElementById("pass-tip");
        
        if (pass.value.length < 8) {
            tip.style.color = "red";
            tip.textContent = "Password too short (8 character minimum)";
        } else if ( pass.value.length >= 8) {
            tip.style.color = "green";
            tip.textContent = "Good";
        }
        // tip.textContent = pass.value.length;
    })
</script>

</html>