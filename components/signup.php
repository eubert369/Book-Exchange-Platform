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
        <h1 id="create-acct" class="text-center fw-bold mx-auto w-50 pb-1" data-aos="fade-down" data-aos-duration="1500">Create Account</h1>
        <div class="row px-0">
            <div class="col px-0 py-0 mx-2">
                <div class="border border-2 shadow fillup-form pb-3" data-aos="zoom-in-right" data-aos-duration="1500">
                    <div class="orange-design"></div>
                    <div class="d-flex px-3 py-2 pb-4 flex-row">
                        <div class="d-flex justify-content-center flex-column w-50">
                            <div class="mx-2 d-flex justify-content-center">
                                <!-- <label for="firstName">First Name</label> -->
                                <input class="w-75 mt-3 fs-5 px-2" id="firstName" type="text" placeholder="First Name">
                            </div>
                            <div class="mx-2 d-flex justify-content-center">
                                <!-- <label for="email">Email</label> -->
                                <input class="w-75 mt-3 fs-5 px-2" id="email" type="email" placeholder="Email">
                            </div>
                            <div class="mx-2 d-flex justify-content-center">
                                <!-- <label for="address">Address</label> -->
                                <input class="w-75 mt-3 fs-5 px-2" id="address" type="text" placeholder="Address">
                            </div>
                            <div class="mx-2 d-flex justify-content-center">
                                <!-- <label for="gender">Gender</label> <br> -->
                                <select class="w-75 mt-4 fs-5 px-2" name="" id="gender">
                                    <option value="" disabled selected>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center flex-column w-50">
                            <div class="mx-2 d-flex justify-content-center">
                                <!-- <label for="lastName">Last Name</label> -->
                                <input class="w-75 mt-3 fs-5 px-2" id="firstName" type="text" placeholder="Last Name">
                            </div>
                            <div class="mx-2 d-flex justify-content-center">
                                <!-- <label for="phoneNumber">Phone Number</label> -->
                                <input class="w-75 mt-3 fs-5 px-2" id="email" type="text" placeholder="Phone Number">
                            </div>
                            <div class="mx-2 d-flex justify-content-center">
                                <!-- <label for="birthday">Birthday</label> -->
                                <input class="w-75 mt-3 fs-5 px-2" id="address" type="text" placeholder="Birthday" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
                            </div>
                            <div class="mx-2 d-flex justify-content-center">
                                <!-- <label for="age">Age</label> -->
                                <input class="w-75 mt-3 fs-5 px-2" id="age" type="number" placeholder="Age">
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
                                <input type="checkbox">
                                <label for="">Educational</label><br>
                                <input type="checkbox">
                                <label for="">Romance & Saga</label><br>
                                <input type="checkbox">
                                <label for="">Fantasy & Adventure</label><br>
                                <input type="checkbox">
                                <label for="">Science Fiction</label><br>
                                <input type="checkbox">
                                <label for="">Historical Fiction</label>
                            </div>
                            <div class="col">
                                <input type="checkbox">
                                <label for="">Mystery & Suspense</label><br>
                                <input type="checkbox">
                                <label for="">Young Adult</label><br>
                                <input type="checkbox">
                                <label for="">Non-Fiction & Biography</label><br>
                                <input type="checkbox">
                                <label for="">Horror & Supernatural</label><br>
                                <input type="checkbox">
                                <label for="">Comedy & Satire</label>
                            </div>
                            <siv class="col">
                                <input type="checkbox">
                                <label for="">Poetry & Prose</label><br>
                                <input type="checkbox">
                                <label for="">Self-Help</label><br>
                                <input type="checkbox">
                                <label for="">Crime & Thriller</label>
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
                        <input class="w-100 fs-5 mb-3 px-2" id="username" type="text" placeholder="Username">
                        <!-- <label for="password">Password</label> -->
                        <input class="w-100 fs-5 mb-3 px-2" id="password" type="text" placeholder="Password">
                        <span class="text-secondary">
                            8 character minimum, case-sensitive.<br>
                            Tip: Use upper and lowercase, numbers, and symbols for strong passwords.
                        </span>
                    </div>
                </div>

                <div class="border border-2 mt-4 shadow" data-aos="zoom-in-left" data-aos-duration="2500">
                    <div class="orange-design"></div>
                    <div class="d-flex flex-column px-5 pb-3">
                        <p class="text-center">Upload Profile Photo</p>
                        <img class="img mx-auto rounded-circle border" src="../assets/accounts.png" alt="upload_profile" style="width: 120px;">
                        <button class="btn w-100 w-50 mx-auto mt-3 upload-btn fw-bold">Upload</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4 mb-4" data-aos="zoom-in-up" data-aos-duration="1000">
            <a class="sign-up-btn btn mx-auto w-25 fw-bold">Sign Up</a>
            <p class="mt-3">Already have an account? <a href="./login.php">Click here!</a></p>
        </div>
    </div>
</body>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>
<script src="../aos-master/dist/aos.js"></script>
<script>AOS.init();</script>
</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/bookloopph-website-favicon-white.png">
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
    <form id="signUpForm" action="./php-queries/create.php?signUp=createUser" method="post">
        <div class="container-fluid p-0 min-vh-100">
            <a class="btn position-absolute m-3 rounded-pill px-3 fw-bold" href="../index.php" style="background-color: #DEA0575E;">
                <i class="rounded-circle p-2"><img style="width: 50px;" src="../assets/bookloopph-website-favicon-white.png" alt="logo" /></i>
                Home
            </a>
            <div class="row ">
                <div class="col-6 p-0">
                    <img class="img-fluid min-vh-100" src="../assets/signup_background.png" alt="background">
                </div>
                <div class="col-6 p-0 d-flex justify-content-center align-items-end vh-100 pb-5" style="background-color: #E0D8B0;">
                    <div class="mx-5 w-75">
                        <h1 class="fw-bold mb-3">Create an Account</h1>                        
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
                            <button id="submitBtn" type="button" class="btn text-white px-4 rounded-4 w-50 fw-bold" style="background-color: #CE9461;">Join Now!</button>
                            <p class="fs-5 mt-5">Already have an account? <a href="login.php">Click here!</a></p>
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

    document.getElementById("submitBtn").addEventListener('click', function() {
        var user = document.getElementById('username').value;
        var pass = document.getElementById('password').value;
        var form = document.getElementById("signUpForm");        

        if (user == "" || pass == "") {
            alert("please fill all the inputs");
        } else if (pass.length <= 8) {
            alert("password must have an 8 character minimum");
        } else {            
            // alert(user + " " + pass);
            form.submit();
        }
    })    

    document.getElementById('show-password').addEventListener('mousedown', function() {
        document.querySelector('input[name=password]').setAttribute('type', 'text')
    })

    document.getElementById('show-password').addEventListener('mouseup', function() {
        document.querySelector('input[name=password]').setAttribute('type', 'password')
    })
</script>

</html> -->