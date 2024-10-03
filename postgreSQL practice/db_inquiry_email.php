<!-- 3.query email =ted5@php.com -->

<?php
include("db_connection.php");
?>

<?php


// $conn = pg_connect("host=localhost  dbname=test  user=postgres password=postgres");

if ($conn) {
    // echo "db connected :)";
    //METHOD1
    $sql = "SELECT * FROM users WHERE email='ted5@php.com'";
    $res = pg_query($conn, $sql);

    $arr = pg_fetch_row($res); // return an array

    print_r($arr); // This will print the entire array for debugging

    foreach ($arr as $item) {
        echo "$item <br>";
    }

    echo "--------------------upper is fetch row , down is fetch all<br>";
    //METHOD2
    $arr = pg_fetch_all($res); //return an array with all rows
    print_r($arr); // This will print the entire array for debugging

    foreach ($arr as $allrows) {

        foreach ($allrows as $row) {
            echo $row . "<br>";
        }
        echo "-------------<br>";
    }
};
