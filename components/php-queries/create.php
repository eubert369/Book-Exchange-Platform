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
    } else if (!empty($_REQUEST["postSale"])) {
        createPostSale();
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

    try {
        $sql = "INSERT INTO `users`(`Username`, `Password`) VALUES ('$username', '$password')"; // implode() to convert array to string with separator
        $conn->query($sql);
        $conn->close();
        header("Location: ../welcome.php");
        exit();
    } catch (\Throwable $th) {
        echo $th;
    }
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

        try {            
            $sql = "UPDATE `users` SET `FirstName`='$firstName',`LastName`='$lastName',`Email`='$email',`PhoneNumber`='$phone',`Address`='$address',`Gender`='$gender',`Birthday`='$birthday',`Age`='$age',`ProfilePhoto`='$img_data',`Interests`='$serializedInterest' WHERE Username = '$username' && Password = '$password'";
            $result = $conn->query($sql);
            if ($result) {
                $conn->close();
                // echo "try to check if the bitch worked";
                header("Location: ../homepage.php");
            } else {
                echo "file error;";
            }
        } catch (\Exception $th) {
            echo $th;
        }
    }
}

// create post for sale
function createPostSale() {
    include "./connection.php";

    $book_image = $_FILES["imageSale"]["name"];
    $book_img_data = addslashes(file_get_contents($_FILES["imageSale"]["tmp_name"]));

    $title = $_REQUEST["title"];
    $author = $_REQUEST["author"];
    $genre = $_REQUEST["genre"];
    $condition = $_REQUEST["condition"];
    $price = $_REQUEST["price"];
    $edition =$_REQUEST["edition"];
    $language = $_REQUEST["language"];

    try {
        $sql = "INSERT INTO `book_sale_post`(`title`, `author`, `genre`, `condition`, `price`, `edition`, `language`, `book_photo`) VALUES ('$title','$author','$genre','$condition','$price','$edition','$language','$book_img_data')";
        $conn->query($sql);
        $conn->close();
        header("Location: ../homepage.php");
    } catch (\Exception $th) {
        echo $th;
    }
    
}
