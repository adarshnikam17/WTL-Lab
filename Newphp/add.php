<?php
// Adding three numbers
$num1 = 10;
$num2 = 20;
$num3 = 30;

$sum = $num1 + $num2 + $num3;
echo "Sum of the numbers: " . $sum . "<br>";

// Factorial of a number
$number = 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}
echo "Factorial of " . $number . " is: " . $factorial . "<br>";

// Greatest number
$greatest = max($num1, $num2, $num3);
echo "Greatest number: " . $greatest . "<br>";

// Conditional statement
if ($greatest > 25) {
    echo "The greatest number is greater than 25.";
} else {
    echo "The greatest number is not greater than 25.";
}
?>
