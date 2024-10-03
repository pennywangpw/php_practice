<?php

//order does matter
//can judge boolean
$hour = 50;
$rate = 15;
$weekly_pay = null;

if ($hour < 0) {
    $weekly_pay = 0;
} elseif ($hour <= 40) {
    $weekly_pay = $hour * $rate;
} else {
    $weekly_pay = 40 * $rate + ($hour - 40) * ($rate * 1.5);
}

echo "You made \${$weekly_pay} this week";
