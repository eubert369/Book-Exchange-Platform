<?php
// include "./connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_REQUEST["signUp"])) {
        // echo "signUp have worked";
        // header("Location: ../welcome.php");
        createUser();
    } else if (!empty($_REQUEST["userData"])) {
        // echo "userData have worked";
        updateUser();
    } else {
        echo "error bitch";
    }
}


function createUser()
{
    include "./connection.php";   

    session_start();
    $_SESSION["username"] = $_REQUEST['username'];
    $_SESSION["password"] = $_REQUEST['password'];

    $username = $_SESSION["username"];
    $password = $_SESSION["password"];

    // echo $username . " " . $password;

    try {
        $sql = "INSERT INTO `users`(`Username`, `Password`) VALUES ('$username', '$password')"; // implode() to convert array to string with separator
        $conn->query($sql);
        $conn->close();
        header("Location: ../welcome.php");
        exit();
    } catch (\Throwable $th) {
        echo $th;
    }

    // $firstName = $_REQUEST["firstName"];
    // $lastName = $_REQUEST["lastName"];
    // $email = $_REQUEST["email"];
    // $profile = $_REQUEST["imageUpload"]
    // $interest = $_REQUEST["interests"];
    // $arrayOfInterests = array_values($interest);

    // if (empty($username) && empty($password) || empty($firstName) || empty($lastName) || empty($email) || sizeof($interest) == 0) {
    //     header("Location: ../signup.php");
    // } else {
    //     // echo $username." ".$password." ".$firstName." ".$lastName." ".$email." ".$profile." ".$arrayOfInterests;
    //     try {
    //         $sql = "INSERT INTO users(Username, Password, FirstName, LastName, Email, ProfilePhoto, Interests) VALUES ('$username', '$password', '$firstName', '$lastName', '$email', '$profile', '$arrayOfInterests')"; // implode() to convert array to string with separator
    //         $conn->query($sql);
    //         $conn->close();
    //         header("Location: ../homepage.php");
    //     } catch (\Throwable $th) {
    //         echo $th;
    //     }
    // }
}

function updateUser()
{
    include "./connection.php";
    session_start();
    
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    $firstName = $_REQUEST["firstName"];
    $lastName = $_REQUEST["lastName"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phoneNumber"];
    $address = $_REQUEST["address"];
    $gender = $_REQUEST["gender"];
    $birthday = $_REQUEST["birthday"];
    $age = $_REQUEST["age"];
    $profileImage = $_REQUEST["imageUpload"];
    $interest = $_REQUEST["interests"];
    $arrayOfInterests = array_values($interest);

    // echo $username . " and " . $password . " with " . $firstName . " " . $lastName . " " . $email . " " . $phone . " " . $address . " " . $gender . " " . $birthday . " " . $age . " " . $profileImage . " " . $arrayOfInterests;

    try {
        $sql = "UPDATE `users` SET `FirstName`='$firstName',`LastName`='$lastName',`Email`='$email',`PhoneNumber`='$phone',`Addess`='$address',`Gender`='$gender',`Birthday`='$birthday',`Age`='$age',`ProfilePhoto`='$profileImage',`Interests`='$arrayOfInterests' WHERE Username = '$username' && Password = '$password'";
        $result = $conn->query($sql);
        $conn->close();
        // echo "try to check if the bitch worked";
        header("Location: ../homepage.php");
    } catch (\Throwable $th) {
        echo $th;
    }
}
