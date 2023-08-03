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