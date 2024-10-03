<?php

//1.verify if db is connected
//2.error handling

$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "businessdb";

$conn = "";

// $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

// if ($conn) {
//     echo "you are connected..";
// } else {
//     echo "you are not connected.";
// }

try {

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {

    echo "you are not connected.<br>";
}
if ($conn) {
    echo "you are connected..<br>";
}
