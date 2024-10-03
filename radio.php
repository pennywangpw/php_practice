<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radio.php" method="post">
        <input type="radio" name="credit_card" value="visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm">
    </form>


</body>

</html>

<?php


//1.Warning: Undefined array key "credit_card" in C:\xampp\htdocs\php\radio.php -> 沒按步要顯示
// $credit_card = $_POST["credit_card"];
// echo $credit_card;


//2.按了confirm button也不想要顯示Warning: Undefined array key "credit_card" in C:\xampp\htdocs\php\radio.php -> 顯示message
// if (isset($_POST["confirm"])) {
//     if (isset($_POST["credit_card"])) {
//         $credit_card = $_POST["credit_card"];
//         echo $credit_card;
//     } else {
//         echo "Please select a credit card";
//     }
// }

//3.check current button equals to specific selection ->會有Warning: Undefined variable $credit_card in 問題

// if (isset($_POST["confirm"])) {
//     $credit_card = null;

//     if (isset($_POST["credit_card"])) {
//         $credit_card = $_POST["credit_card"];
//         echo $credit_card . "<br>";
//     }

//     if ($credit_card == "visa") {
//         echo "You selected Visa";
//     } elseif ($credit_card == "Mastercard") {
//         echo "You selected Mastercard";
//     } elseif ($credit_card == "American Express") {
//         echo "You selected American Express";
//     } else {
//         echo "Please select a credit card";
//     }
// }

//4.改為switch
if (isset($_POST["confirm"])) {
    $credit_card = null;

    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];
        echo $credit_card . "<br>";
    }

    switch ($credit_card) {
        case "visa":
            echo "You selected Visa";
            break;
        case "Mastercard":
            echo "You selected Mastercard";
            break;

        case "American Express":
            echo "You selected American Express";
            break;

        default:
            echo "Please select a credit card";
            break;
    }
}
?>
