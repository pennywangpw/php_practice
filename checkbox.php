<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="hotdog" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="taco" value="Taco">
        Taco<br>
        <input type="submit" name="submit">


    </form>
</body>

</html> -->



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- name->key value->value -->

<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="foods[]" value="PIZZA">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="HAMBURGER">
        Hamburger<br>
        <input type="checkbox" name="foods[]" value="HOTDOG">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="TACO">
        Taco<br>
        <input type="submit" name="submit">


    </form>
</body>

</html>

<?php
//check if box is checked or not- use isset() AND empty()
//這樣會有warning 因為我沒有check的box部會透過form傳到後端,所以access下面這些變數會有問題
// $pizza = $_POST["pizza"];
// $hamburger = $_POST["hamburger"];
// $hotdog = $_POST["hotdog"];
// $taco = $_POST["taco"];
// $submit = $_POST["submit"];



// if (isset($submit)) {
//     if (isset($pizza)) {
//         echo "I love pizza!<br>";
//     }
//     if (isset($hamburger)) {
//         echo "I love hamburger!<br>";
//     }
//     if (isset($hotdog)) {
//         echo "I love hotdog!<br>";
//     }
//     if (isset($taco)) {
//         echo "I love taco!<br>";
//     }
//     if (empty($pizza)) {
//         echo "I DONT LIKE pizza!<br>";
//     }
//     if (empty($hamburger)) {
//         echo "I DONT LIKE hamburger!<br>";
//     }
//     if (empty($hotdog)) {
//         echo "I DONT LIKE hotdog!<br>";
//     }
//     if (empty($taco)) {
//         echo "I DONT LIKE taco!<br>";
//     }
// }

// if (isset($_POST["submit"])) {
//     if (isset($_POST["pizza"])) {
//         echo "I love pizza!<br>";
//     }
//     if (isset($_POST["hamburger"])) {
//         echo "I love hamburger!<br>";
//     }
//     if (isset($_POST["hotdog"])) {
//         echo "I love hotdog!<br>";
//     }
//     if (isset($_POST["taco"])) {
//         echo "I love taco!<br>";
//     }
//     if (empty($_POST["pizza"])) {
//         echo "I DONT LIKE pizza!<br>";
//     }
//     if (empty($_POST["hamburger"])) {
//         echo "I DONT LIKE hamburger!<br>";
//     }
//     if (empty($_POST["hotdog"])) {
//         echo "I DONT LIKE hotdog!<br>";
//     }
//     if (empty($_POST["taco"])) {
//         echo "I DONT LIKE taco!<br>";
//     }
// }
//display in an array

if (isset($_POST["submit"])) {
    $foods = $_POST["foods"];
    // echo $foods[0];
    foreach ($foods as $food) {
        echo $food . "<br>";
    }
}
?>
