<?php

//1. how to set up session
//2.header()
//3.how to destroy session

session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- This is the login page<br>
    <a href="session_home.php">Home Page</a><br> -->
    <form action="session_index.php" method="post">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="login">
    </form>


</body>

</html>


<?php
// //want to this info accessible in other page
// $_SESSION["username"] = "Penny";
// $_SESSION["password"] = "password";

// echo "{$_SESSION["username"]}<br>";

// echo "{$_SESSION["password"]}<br>";

// //when login button is click then assign session
// if (isset($_POST["submit"])) {
//     $_SESSION["username"] = $_POST["username"];
//     $_SESSION["password"] = $_POST["password"];

//     echo "{$_SESSION["username"]}<br>";

//     echo "{$_SESSION["password"]}<br>";
// }

//when login button is click then assign session-check both info are provided
if (isset($_POST["submit"])) {
    //if both info are provided store in session
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        //1. how to set up session

        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        echo "{$_SESSION["username"]}<br>";

        echo "{$_SESSION["password"]}<br>";
        //2.header()

        header("Location: session_home.php");
    }
    //if one of missing echo a warning
    else {
        echo "Missing : password/username!";
    }
}

?>
