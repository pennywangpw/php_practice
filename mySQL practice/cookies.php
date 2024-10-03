<?php
//set up
setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "coke", time() + (86400 * 3), "/");
setcookie("fav_dessert", "cookie", time() + (86400 * 4), "/");


//delete
// setcookie("fav_food", "pizza", time() - 0, "/");
// setcookie("fav_drink", "coke", time() - 0, "/");
// setcookie("fav_dessert", "cookie", time() - 0, "/");

//cookie stores key value pair-list all cookies
// foreach ($_COOKIE as $key => $value) {
//     echo "{$key}= {$value} <br>";
// }


//cookie stores key value pair
if (isset($_COOKIE["fav_food"])) {
    echo "You like {$_COOKIE["fav_food"]}";
} else {
    echo "I dont know what you like";
}
