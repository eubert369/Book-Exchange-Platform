<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/white-logo.png">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <title>Login</title>
</head>

<body style="overflow-y: hidden; overflow-x: hidden;">
    <div class="container-fluid p-0 min-vh-100">
        <div class="position-absolute w-100 text-end m-2">
            <a class="btn m-3 rounded-pill px-3 fw-bold" href="../index.php" style="background-color: #DEA0575E;">Home <i class="rounded-circle p-2"><img style="width: 50px;" src="../assets/black-logo.png" alt="logo"></i></a>
        </div>
        <div class="row p-0">
            <div class="col-6 p-0 position-relative d-flex justify-content-center" style="background-color: #E0D8B0;">
                <div class="mx-5 w-75 position-absolute" style="top: 25%;">
                    <h1 class="fw-bold mb-3">Log In</h1>
                    <form action="">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control px-3 rounded-4" id="username" placeholder="name@example.com" style="border: 2px solid #CE9461;">
                            <label class="fw-bold" for="username">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control px-3 rounded-4" id="password" placeholder="name@example.com" style="border: 2px solid #CE9461;">
                            <label class="fw-bold" for="password">Password</label>
                        </div>
                        <div class="w-100 text-center">
                            <a type="submit" class="btn text-white px-4 rounded-4 w-50 fw-bold" style="background-color: #CE9461;">LOG IN</a>
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
</body>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>

</html>

<?php require 'connection.php' ?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="assets/white-logo.png">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Login</title>
</head>

<body class="container" style="background-color: #FCFFE7;"> -->
<?php

// SELECT QUERY

// $username = $password = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $selectSql = "SELECT username, password FROM usertable WHERE username = ? AND password = ?";

//     $stmt = $conn->prepare($selectSql);
//     $stmt->bind_param("ss", $username, $password);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result->num_rows === 1) {
//         header("Location: homepage.php");
//     } else {
//         echo "Invalid username or password.";
//     }
// }

?>

<!-- <h1 class="text-white text-center mt-4 mb-5">LOGIN</h1> -->
<!-- <div class="row position-absolute top-50 start-50 translate-middle w-75 ">
        <div class="container border col-6 mx-auto text-center rounded-5 p-3 shadow-lg" style="background-color: #DEA057;">
            <img class="img" src="assets/white-logo.png" alt="logo" width="80">
            <h3 class=" fs-2 mb-3">Login</h3>
            <form action="#" method="post">
                <input class="input_text rounded-3 p-2 w-75 mt-2" type="text" placeholder="Username" name="username">
                <input class="input_text rounded-3 p-2 w-75 mt-3" type="password" placeholder="Password" name="password">
                <div class="col-auto mt-4 mb-3">
                    <button class="btn bg-white" type="submit">Login</button>
                </div>
                <p class=""><a href="signUp.php">Signup</a> if you don't have an account.</p>
            </form>
        </div>
    </div>
</body>
<script src="bootstrap.bundle.min.js"></script>

</html> -->