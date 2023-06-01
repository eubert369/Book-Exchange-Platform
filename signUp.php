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
    <title>Sign Up</title>
</head>
<body>

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

    <div id="signUpOuterContainer">
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
    </div>
   
</body>
</html>