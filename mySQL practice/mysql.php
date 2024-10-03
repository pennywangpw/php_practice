<!-- <?php
        //1.include can import other file info
        include("mysql_db.php")
        ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hello..this is test include()
</body>

</html> -->



<?php

// // 2.try to insert db
// include("mysql_db.php");
// $sql = "INSERT INTO users(user,password) VALUES('spongebob2','pineapple12')";

// mysqli_query($conn, $sql);
// mysqli_close($conn);

//3.error handling-因為可能會遇到Fatal error: Uncaught mysqli_sql_exception:  例如重複的username少其中一個資料
// include("mysql_db.php");
// $sql = "INSERT INTO users(user,password) VALUES('TEST')";


// try {
//     mysqli_query($conn, $sql);
//     echo "the user is registered!";
// } catch (mysqli_sql_exception) {
//     mysqli_close($conn);
//     echo "the user is NOT registered!";
// }

// //4.use variable
include("mysql_db.php");
$username = "cc";
$password = "ccsss";
$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users(user,password) VALUES('$username','$hash')";


try {
    mysqli_query($conn, $sql);
    echo "the user is registered!";
} catch (mysqli_sql_exception) {
    mysqli_close($conn);
    echo "the user is NOT registered!";
}

mysqli_close($conn);


?>
