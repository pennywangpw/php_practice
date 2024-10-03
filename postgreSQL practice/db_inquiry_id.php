<!-- 2.query id =3 -->

<?php
include("db_connection.php");
?>

<?php


// $conn = pg_connect("host=localhost  dbname=test  user=postgres password=postgres");

if ($conn) {
    // echo "db connected :)";

    $sql = "SELECT * FROM users WHERE id=3";
    $res = pg_query($conn, $sql);
    $arr = pg_fetch_all($res);

    print_r($arr); // This will print the entire array for debugging

    foreach ($arr as $key) {
        foreach ($key as $item) {
            echo $item . "<br>";
        }
        echo "-------------<br>";
    }
};
