<?php

//1.how to set up session,就可以在各頁面開始
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
    This is the home page<br>
    <!-- <a href="session_index.php">Log In Page</a><br> -->
    <form action="session_home.php" method="post">
        <input type="submit" name="logout" value="Log Out"><br>

    </form>

</body>

</html>

<?php
echo "{$_SESSION["username"]} <br>";
echo "{$_SESSION["password"]}<br>";

//if log out button clicked go back to log in page and delete session
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: session_index.php");
}

?>
