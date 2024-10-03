<?php
// 1.write a loop that prints even numbers between 1 and 100.

// $count = 0;
// for ($i = 1; $i < 101; $i++) {
//     if ($i % 2 == 0) {
//         echo "{$i}<br>";
//         $count++;
//     }
// }

// echo "total count {$count}";



//2.Classic loop between two integers that print odd numbers, and variations around that (%3, %5, etc even both %3 and 5).

// for ($i = 0; $i <= 100; $i++) {
//     if ($i % 3 == 0 && $i % 5 == 0 && $i % 2 != 0) {
//         echo "{$i}<br>";
//     }
// }



//3.operator precedemce
// $x = 5;
// echo $x;
// echo "<br />";
// echo $x++ + $x++; //5 + 6=11
// echo "<br />";
// echo $x; //7
// echo "<br />";
// echo $x-- - $x--; //7-6=1
// echo "<br />";
// echo $x;//5


//4. & reference to $a
// $a = '1';
// echo $a . "<br>";
// $b = &$a;
// echo $b . "<br>";
// $b = "2$b";
// echo $b . "<br>";


//5. === strict comparison does not do the automatic type coerxtion,
//== automatically be coerced to an integer when being compared with an integer value 文字轉integer
echo var_dump(0123 == 123) . "<br>";
echo var_dump('0123' == 123) . "<br>";
echo var_dump('0123' === 123) . "<br>";

// bool(false)
// bool(true)
// bool(false)


//6.php會嘗試將文字轉成數字,但不能轉的話變成0

$a = "PHP";
$a = $a + 1;
echo $a;
