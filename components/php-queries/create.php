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

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["imageUpload"])) {
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
        $profileImage = $_FILES['imageUpload'];
        $interest = $_REQUEST["interests"];
        // $arrayOfInterests = array_values($interest);
        $serializedInterest = serialize($interest);

        // image
        $img_name = $_FILES['imageUpload']['name'];
        $img_data = addslashes(file_get_contents($_FILES["imageUpload"]["tmp_name"]));
        // $img_tmp_name = $_FILES['imageUpload']['tmp_name'];
        // $upload_folder = "images/";
        // echo $img_name  . " " .  $img_tmp_name . " " .  $upload_folder . " " . $img_data;
        // $moveFile = move_uploaded_file($img_tmp_name, $upload_folder . $img_name);
        // if ($moveFile) {
        //     echo "bitch worked";
        // } else {
        //     echo "buysit";
        // }
        // echo $profileImage . " " .  $imageName  . " " .  $imageTmpName . " " .  $destination;
        // $openImage = fopen($profileImage, 'r+');

        // echo $username . " and " . $password . " with " . $firstName . " " . $lastName . " " . $email . " " . $phone . " " . $address . " " . $gender . " " . $birthday . " " . $age . " " . $profileImage . " " . $arrayOfInterests;

        try {
            // move_uploaded_file($imageTmpName, $destination . basename($imageName));
            $sql = "UPDATE `users` SET `FirstName`='$firstName',`LastName`='$lastName',`Email`='$email',`PhoneNumber`='$phone',`Address`='$address',`Gender`='$gender',`Birthday`='$birthday',`Age`='$age',`ProfilePhoto`='$img_data',`Interests`='$serializedInterest' WHERE Username = '$username' && Password = '$password'";
            $result = $conn->query($sql);
            if ($result) {
                $conn->close();
                // echo "try to check if the bitch worked";
                header("Location: ../login.php");
            } else {
                echo "bitch";
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}
