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
            <form action="login.php" method="post">
                <input class="w-100 fs-5 mb-3 px-2" id="username" name="username" type="text" placeholder="Username">
                <input class="w-100 fs-5 px-2" id="password" name="password" type="password" placeholder="Password">                
                <input type="checkbox" id="show-password" class="ms-2">
                <label for="show-password">Show Password</label> <br>                
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    include "./php-queries/connection.php";

                    $user = $_REQUEST["username"];
                    $pass = $_REQUEST["password"];

                    try {
                        $sql = "SELECT * FROM `users` WHERE `Username` = ? && `Password` = ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("ss", $user, $pass);

                        if ($stmt === false) {
                            echo '<p class="text-danger mt-1 text-center">ERROR in preparing the query</p>';
                        }
                        $stmt->execute();
                        $result = $stmt->get_result();
                        $row = $result->fetch_assoc();

                        if ($row) {
                            if($row["Username"] == $user && $row["Password"] == $pass) {
                                $conn->close();
                                session_start();
                                $_SESSION["user"] = $user;
                                $_SESSION["pass"] = $pass;
                                $_SESSION["id"] = $row["id"];
                                header("Location: homepage.php");
                                exit();
                            }
                        } else {
                            echo '<p class="text-danger fw-bold mt-1 text-center">Incorrect username or password</p>';
                        }

                    } catch (\Throwable $th) {
                        echo $th;
                    }
                }
                ?>
                <button class="btn mt-3 w-100 sign-up-btn mb-3 fw-bold" type="submit">Log in</button>
            </form>
            <p class="mt-5 text-center">Don't have an account? <a href="signup.php">Click here!</a></p>
        </div>
    </div>
</body>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>
<script src="../aos-master/dist/aos.js"></script>
<script>
    AOS.init();

    var password_input = document.getElementById("password");
    var show_password = document.getElementById("show-password");
    var boolValue = 0;

    show_password.addEventListener("change", function() {
        if (boolValue == 0) {
            document.getElementById("password").setAttribute('type', 'text');
            boolValue = 1;
        } else {
            document.getElementById("password").setAttribute('type', 'password');
            boolValue = 0;
        }
    });
</script>

</html>