<!-- 1.connect postgreSQL  -->


<?php


$conn = pg_connect("host=localhost  dbname=test  user=postgres password=postgres");

if ($conn) {
    echo "db connected :)";
};


?>
