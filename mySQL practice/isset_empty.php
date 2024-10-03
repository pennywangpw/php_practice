<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="isset_empty.php" method="post">
        <label>username: </label><br>
        <input type="text" name="username"><br>
        <label>password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log In"><br>
    </form>
</body>

</html>

<?php
//isset()= returns TRUE if a variable is declared and not null;
//empty()= returns TRUE if a variable is not declared, false, null , "";


$username = $_POST["username"];
$password = $_POST["password"];


// $username = "dd";
// //isset
// if (isset($username)) {
//     echo "the username is set";
// } else {
//     echo "the username is NOT set";
// }

// //empty
// if (empty($username)) {
//     echo "the username is empty";
// } else {
//     echo "the username is NOT empty";
// }

// echo "username= {$username}<br>";
// echo "password= {$password}<br>";
// echo "login= {$login}<br>";


if (isset($_POST["login"])) {
    if (empty($username)) {
        echo "Username is missing<br>";
    } elseif (empty($password)) {
        echo "password is missing<br>";
    } else {
        echo "Hello {$username}<br>";
    }
}


?>
