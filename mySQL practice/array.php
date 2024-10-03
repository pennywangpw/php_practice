<!-- variable which can hold more than 1 value at a time -->
<!-- store the same or similar data type -->


<?php

$foods = array("apple", "orange", "banana", "coconut");
//access array
// $foods[0];

//reassign item in array
// $foods[0] = "pineapple";

//array_push($foods,"kiwi");
//array_pop($foods);
//array_shift($foods);
$foods = array_reverse($foods);
// echo count($foods);

foreach ($foods as $food) {
    echo $food . "<br>";
}

?>
