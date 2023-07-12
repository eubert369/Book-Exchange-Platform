<?php
// include "./connection.php";


if (!empty($_REQUEST["signUp"])) {    
    createUser();
} 

function createUser() {
    include "./connection.php";
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $firstName = $_REQUEST["firstName"];
    $lastName = $_REQUEST["lastName"];
    $email = $_REQUEST["email"];
    $profile = $_REQUEST["imageUpload"];
    $interest = $_REQUEST["interests"];    
    $arrayOfInterests = array_values($interest);

    if (empty($username) && empty($password) || empty($firstName) || empty($lastName) || empty($email) || sizeof($interest) == 0) {            
        header("Location: ../signup.php");
    } else {
        // echo $username." ".$password." ".$firstName." ".$lastName." ".$email." ".$profile." ".$arrayOfInterests;
        try {
            $sql = "INSERT INTO users(Username, Password, FirstName, LastName, Email, ProfilePhoto, Interests) VALUES ('$username', '$password', '$firstName', '$lastName', '$email', '$profile', '$arrayOfInterests')"; // implode() to convert array to string with separator
            $conn->query($sql);
            $conn->close();
            header("Location: ../homepage.php");
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}
