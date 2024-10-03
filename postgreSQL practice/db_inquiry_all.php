<!-- 4.query all -->

<?php
include("db_connection.php");
?>


<?php


// $conn = pg_connect("host=localhost  dbname=test  user=postgres password=postgres");


//METHOD1 -FETCH ALL 因為是拿到array of rows ,要再進到每一層row裡面拿資料,所以會有雙層
if ($conn) {
    $sql = "SELECT * FROM users";
    $res = pg_query($conn, $sql);
    $arr = pg_fetch_all($res); //return an array with all rows in the res. each row is an array of field vals.
    //array(row1,row2,row3...) => row1 : array(id,name,phone)

    print_r($arr); // This will print the entire array for debugging


    echo "----------------<br><br>";
    foreach ($arr as $row) {
        print_r($row); // This will print the entire array for debugging

        foreach ($row as $item) {
            echo "<br>$item <br>";
        }
        // echo "-------------<br>";
    }
};
