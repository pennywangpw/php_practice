<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- set up the place i want to send to  -->
    <form action="restaurant.php" method="get">
        <label>quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total"><br>

    </form>
</body>

</html>


<?php
//collecting the data from html
$item = "pizza";
$price = 13.99;
$quantity = $_GET["quantity"];
$total = null;

$total = $price * $quantity;
echo "You have ordered {$quantity} x {$item}/s";
echo "Your total is: \${$total}";

?>
