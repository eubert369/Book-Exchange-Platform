<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookRedux | Login</title>
    <link rel="icon" href="../assets/Book_Logo.png">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css?v=<?php echo time(); ?>">
    <link href="../aos-master/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid px-0 py-3 d-flex min-vh-100">
        <a href="../index.php" class="position-absolute mx-4 my-1 navbar-brand pb-3 px-2" data-aos="fade-right" data-aos-duration="2000"><img class="img" src="../assets/Book_Logo.png" alt="Logo"></a>
        <div class="mx-auto login-orange px-5 align-self-center py-2 rounded-3 shadow fillup-form" data-aos="zoom-in-up" data-aos-duration="2000" style="width: 503px;">
            <h2 class="fw-bold text-center mb-5">Log In</h2>
            <input class="w-100 fs-5 mb-3 px-2" id="username" type="text" placeholder="Username">
            <input class="w-100 fs-5 mb-5 px-2" id="password" type="text" placeholder="Password">
            <button class="btn w-100 sign-up-btn mb-3 fw-bold" type="submit">Log in</button>
            <input type="checkbox" id="remember">
            <label for="remember">Remember me</label>
            <p class="mt-5 text-center">Don't have an account? <a href="./signup.php">Click here!</a></p>
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
    <title>Login</title>


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
    <div class="container-fluid p-0 min-vh-100">
        <div class="position-absolute w-100 text-end m-2">
            <a class="btn m-3 rounded-pill px-3 fw-bold" href="../index.php" style="background-color: #DEA0575E;">Home <i class="rounded-circle p-2"><img style="width: 50px;" src="../assets/bookloopph-website-favicon-white.png" alt="logo"></i></a>
        </div>
        <div class="row p-0">
            <div class="col-6 p-0 position-relative d-flex justify-content-center" style="background-color: #E0D8B0;">
                <div class="mx-5 w-75 position-absolute" style="top: 20%;">
                    <h1 class="fw-bold mb-3">Log In</h1>                    
                    <form action="login.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control px-3 rounded-4" name="username" id="username" placeholder="name@example.com" style="border: 2px solid #CE9461;" required>
                            <label class="fw-bold" for="username">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control px-3 rounded-4" name="password" id="password" placeholder="name@example.com" style="border: 2px solid #CE9461;" required>
                            <label class="fw-bold" for="password">Password</label>
                            <span id="show-password" class="position-absolute me-3 top-50 end-0 translate-middle-y"></span> -->
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     include "./php-queries/connection.php";
//     $username = $_REQUEST['username'];
//     $password = $_REQUEST['password'];

//     try {
//         $sql = "SELECT * FROM `users` WHERE Username = '$username' && Password = '$password'";
//         $result = $conn->query($sql);
//         $row = $result->fetch_assoc();

//         if ($row) {
//             if ($row["Username"] == $username && $row["Password"] == $password) {
//                 $conn->close();
//                 session_start();
//                 $_SESSION["Username"] = $_REQUEST['username'];
//                 $_SESSION["Password"] = $_REQUEST['password'];
//                 $_SESSION["id"] = $row["id"];
//                 header("Location: homepage.php");
//                 exit();
//             }
//         } else {
//             echo '<p class="text-danger text-center mt-2 fw-bold">Invalid username or password</p>';
//         }
//     } catch (\Throwable $th) {
//         echo $th;
//     }
// }
?>
<!-- </div>
                        <div class="w-100 text-center">
                            <button type="submit" class="btn text-white px-4 rounded-4 w-50 fw-bold" style="background-color: #CE9461;">LOG IN</button>
                            <p class="fs-5 mt-5">Dont have an account? <a href="signup.php">Click here!</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-6 p-0">
                <img class="img-fluid min-vh-100" src="../assets/signup_background.png" alt="background">
            </div>
        </div>
    </div>
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('show-password').addEventListener('mousedown', function() {
            document.querySelector('input[name=password]').setAttribute('type', 'text')
        })

        document.getElementById('show-password').addEventListener('mouseup', function() {
            document.querySelector('input[name=password]').setAttribute('type', 'password')
        })
    </script>
</body>

</html> -->