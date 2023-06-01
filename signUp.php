<?php require 'connection.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="myStylee.css">
    <link relu="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/white-logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Sign Up</title>
</head>

<body style="background-color: #DEA057;">

    <!-- Insert Query -->
    <?php

    $username = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["username"]) || empty($_POST["password"])) {
            echo "full up tanan";
        } else {
            $username = $_POST["username"];
            $password = $_POST["password"];

            // insert query
            $insertSql = "INSERT INTO usertable (username, password) VALUES (?, ?)";

            $stmt = $conn->prepare($insertSql);
            $stmt->bind_param("ss", $username, $password);

            if ($stmt->execute()) {
                header("Location: index.php");
            }
        }
    }


    ?>

    <div class="row position-absolute top-50 start-50 translate-middle w-75">
        <div class="container border col-6 mx-auto text-center rounded-5 p-3 shadow-lg" style="background-color: #FCFFE7;">
            <img class="img" src="assets/black-logo.png" alt="logo" width="80">
            <h3 class=" fs-2 mb-3">Sign Up</h3>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <input class="input_text rounded-3 p-2 w-75 mt-2" type="text" placeholder="Username">
                <input class="input_text rounded-3 p-2 w-75 mt-3" type="password" placeholder="Password">
                <div class="col-auto mt-4 mb-3">
                    <a class="btn bg-white border" href="homepage.php" type="submit">Sign Up</a>
                </div>
                <p class=""><a href="login.php">Login</a> if you already have an account.</p>
            </form>
        </div>
    </div>
    <!-- <div id="signUpOuterContainer">
        <div id="signUpInnerContainer">
            <form id="signUpForm" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method="post">
                <label for="signUpForm">Sign up</label>
                <input type="text" placeholder="Username" name="username">
                <input type="password" placeholder="Password" name="password">
                <div id="buttonContainer">
                    <button type="submit">Create Account</button>
                </div>
            </form>
        </div>    
    </div> -->

</body>
<script src="bootstrap.bundle.min.js"></script>

</html>