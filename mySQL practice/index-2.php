<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- action ->for the place i want to send the data to -->
    <form action="index.php" method="post">
        <!-- name attribute in input type would be a key as key value data , the value here would be user input -->
        <label>username: </label><br>
        <input type="text" name="username"><br>
        <label>password: </label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>



</body>

</html>


<?php

//_GET method - issue: no credential
// //分段-1
// echo $_GET["username"] . "<br>";
// echo $_GET["password"] . "<br>";

// //分段-2
// echo "{$_GET["username"]} <br>";
// echo "{$_GET["password"]} <br>";

//_POST method
echo "{$_POST["username"]} <br>";
echo "{$_POST["password"]} <br>";

?>
