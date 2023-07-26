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
                    <!-- <form action="./php queries/read.php?login=shit" method="post"> -->
                    <form action="login.php" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control px-3 rounded-4" name="username" id="username" placeholder="name@example.com" style="border: 2px solid #CE9461;" required>
                            <label class="fw-bold" for="username">Username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control px-3 rounded-4" name="password" id="password" placeholder="name@example.com" style="border: 2px solid #CE9461;" required>
                            <label class="fw-bold" for="password">Password</label>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                include "./php queries/connection.php";
                                $username = $_REQUEST['username'];
                                $password = $_REQUEST['password'];

                                try {
                                    $sql = "SELECT * FROM `users` WHERE Username = '$username' && Password = '$password'";
                                    $result = $conn->query($sql);
                                    $row = $result->fetch_assoc();

                                    if ($row) {
                                        if ($row["Username"] == $username && $row["Password"] == $password) {
                                            $conn->close();
                                            header("Location: homepage.php");
                                        }
                                    } else {
                                        echo '<p class="text-danger text-center mt-2 fw-bold">Invalid username or password</p>';
                                    }
                                } catch (\Throwable $th) {
                                    echo $th;
                                }
                            }
                            ?>
                        </div>
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
</body>
<script src="../bootstrap/bootstrap.bundle.min.js"></script>

</html>