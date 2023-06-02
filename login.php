<?php require 'connection.php' ?>
<!DOCTYPE html>
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

<body class="container" style="background-color: #FCFFE7;">
<?php 

    // SELECT QUERY
    
    $username = $password = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $selectSql = "SELECT username, password FROM usertable WHERE username = ? AND password = ?";

        $stmt = $conn->prepare($selectSql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            header("Location: homepage.php");
        } else {
            echo "Invalid username or password.";
        }
    }

?>

    <!-- <h1 class="text-white text-center mt-4 mb-5">LOGIN</h1> -->
    <div class="row position-absolute top-50 start-50 translate-middle w-75 ">
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

</html>