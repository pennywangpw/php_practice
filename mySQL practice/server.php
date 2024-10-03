<?php
//global veriable contains: headers, paths, and script locations.
//1.php_self
//2.request_method

// foreach ($_SERVER as $key => $value) {
//     echo "{$key} = {$value}<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- if the file name change action doesn't change itself, we can use php_self to get current file name -->
    <!-- <form action="server.php" method="post"> -->
    <form action=<?php $_SERVER["PHP_SELF"] ?> method="post">

        <label>username: </label><br>
        <input type="text" name="username"><br>
        <input type="submit" name="submit"><br>
    </form>


</body>

</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Hello";
}
?>
