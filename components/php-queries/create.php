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
    } else if (!empty($_REQUEST["postExchange"])) {
        createPostExchange();
    } else if (!empty($_REQUEST["postRent"])) {
        createPostRent();
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
        $sql = "INSERT INTO `book_sale_post`(`sale_title`, `sale_author`, `sale_genre`, `sale_condition`, `sale_price`, `sale_edition`, `sale_language`, `sale_book_photo`) VALUES ('$title','$author','$genre','$condition','$price','$edition','$language','$book_img_data')";
        $conn->query($sql);
        $conn->close();
        header("Location: ../homepage.php");
    } catch (\Exception $th) {
        echo $th;
    }
    
}

function createPostExchange() {
    include "./connection.php";

    $book_image = $_FILES["imageExchange"]["name"];
    $book_img_data = addslashes(file_get_contents($_FILES["imageExchange"]["tmp_name"]));

    $title = $_REQUEST["title"];
    $edition = $_REQUEST["edition"];
    $genre = $_REQUEST["genre"];
    $author = $_REQUEST["author"];
    $language = $_REQUEST["language"];
    $condition = $_REQUEST["condition"];
    $exchange_preference = $_REQUEST["exchange-preference"];

    echo $title . " " . $edition . " " . $genre . " " . $author . " " . $language . " " . $condition . " " . $exchange_preference;

    try {
        $sql = "INSERT INTO `book_exchange_post`(`exchange_title`, `exchange_author`, `exchange_genre`, `exchange_condition`, `exchange_edition`, `exchange_language`, `exchange_preferences`, `exchange_book_photo`) VALUES ('$title','$author','$genre','$condition','$edition','$language','$exchange_preference','$book_img_data')";
        $conn->query($sql);
        $conn->close();
        header("Location: ../homepage.php");
    } catch (\Exception $th) {
        echo $th;
    }
}

function createPostRent() {
    include "./connection.php";
    
    $book_image = $_FILES["imageRent"]["name"];
    $book_img_data = addslashes(file_get_contents($_FILES["imageRent"]["tmp_name"]));

    $title = $_REQUEST["title"];
    $edition = $_REQUEST["edition"];
    $genre = $_REQUEST["genre"];
    $rental_price = $_REQUEST["rentalPrice"];
    $security_deposit = $_REQUEST["securityDeposit"];
    $author = $_REQUEST["author"];
    $language = $_REQUEST["language"];
    $condition = $_REQUEST["condition"];
    $rental_duration = $_REQUEST["rentalDuration"];
    $terms_and_condition = $_REQUEST["termsAndCondition"];

    try {
        $sql = "INSERT INTO `book_rent_post`(`rent_title`, `rent_author`, `rent_genre`, `rent_condition`, `rent_edition`, `rent_language`, `rental_duration`, `security_deposit`, `rental_terms_and_conditions`, `rental_price`, `rent_book_photo`) VALUES ('$title','$author','$genre','$condition','$edition','$language','$rental_duration','$security_deposit','$terms_and_condition','$rental_price','$book_img_data')";
        $conn->query($sql);
        $conn->close();
        header("Location: ../homepage.php");
    } catch (\Exception $th) {
        echo $th;
    }
}