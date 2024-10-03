<?php

$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'finaldb';

$conn = '';

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    echo "The db is connected..<br>";
} catch (mysqli_sql_exception) {
    echo "The db is NOT connected..<br>";
}
