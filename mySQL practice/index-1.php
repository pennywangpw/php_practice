<!-- <?php
        echo "hello world <br>";
        echo "the weather is nice today!";
        //this is a comment
        ?> -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button>check out weekly weather</button>
</body>

</html> -->

<?php
//Data type -string
$name = "Penny W";
$food = "ramen";
$email = "p456@gmail.com";
echo $name;
//Data type -string -> placeholder
echo "<br>Hello {$name}<br>";
echo "I like {$food}<br>";
echo "your email is {$email}<br>";

//Data type -integer
$age = 21;
$users = 3;
$quantity = 8;
echo "you are {$age} year old<br>";
echo "There are {$users} uers online<br>";
echo "you would like to buy {$quantity} items<br>";


//Data type -float (with decimal)
$gpa = 2.5;
$price = 13.99;
$tax_rate = 9.375;
echo "your gpa is :{$gpa} <br>";
echo "your pizza is \${$price}<br>";
echo "The sales tax rate is:{$tax_rate}%<br>";

//Data type -blooean (T/F)
$employed = true;
$online = false;
$for_sale = true;

//Quick Practice
$subtotal = $price * $quantity;
$total = $subtotal + $subtotal * $tax_rate / 100;
echo "Hi, here's your order details: <br>";
echo "you order {$quantity} {$food}s with subtotal {$subtotal} and after tax is {$total}<br>";



?>
