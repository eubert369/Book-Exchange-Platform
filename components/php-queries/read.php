<?php

if (!empty(isset($_REQUEST["login"]))) {
    login();
}

// function not used yet
function login() {
    include "./connection.php";
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    try {
        $sql = "SELECT * FROM `users` WHERE Username = '$username' && Password = '$password'";
        // $sql = "SELECT * FROM `users`";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();      

        if ($row) {
            if ($row["Username"] == $username && $row["Password"] == $password) {
                $conn->close();
                header("Location: ../homepage.php");
            }
            // $row_count = mysqli_num_rows($result);
            // if ($row_count == 1) {
            //     $conn->close();
            //     header("Location: ../homepage.php");
            // } else {
            //     $error = '<p class="text-danger text-center mt-2 fw-bold">Invalid username or password</p>';
            //     header("Location: ../login.php");
            // }
        } else {
            // header("Location: ../login.php");
            echo '<p class="text-danger text-center mt-2 fw-bold">Invalid username or password</p>';
        }
    } catch (\Throwable $th) {
        echo $th;
    }
}
