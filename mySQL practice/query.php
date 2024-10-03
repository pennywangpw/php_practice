<?php
//1.how to query 1
//2.how to query all
include("mysql_db.php");
// $sql = "SELECT * FROM users WHERE user ='spongebob'";
$sql = "SELECT * FROM users";

//mysqli_query will return an object
$result = mysqli_query($conn, $sql);

// //query 1
// if (mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_assoc($result);
//     echo $row["id"] . "<br>";
//     echo $row["user"] . "<br>";
//     echo $row["reg_date"] . "<br>";
// } else {
//     echo "no user found";
// }

//query all
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    };
} else {
    echo "no user found";
}

mysqli_close($conn);
