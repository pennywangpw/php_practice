<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="associative_array.php" method="post">
        <label>Enter a country</label><br>
        <input type="text" name="country">
        <input type="submit">
    </form>
</body>

</html>

<?php
$capitals = array("USA" => "Washington D.C.", "Japan" => " Kyoto", "South Korea" => "Seoul", "India" => "New Delhi");
$country = $_POST["country"];
$capital = $capitals[$country];



echo "The capital is {$capital}";

?>
