<?php

$num1 = 10;
$num2 = 20;
$num3 = 15;

// Compare the numbers and find the greatest
if ($num1 >= $num2 && $num1 >= $num3) {
    echo "$num1 is the greatest.";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "$num2 is the greatest.";
} else {
    echo "$num3 is the greatest.";
}
?>
