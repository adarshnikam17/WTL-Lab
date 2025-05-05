<?php
$array = [5, 3, 9, 1, 3];

echo count($array) . "<br>";

array_push($array, 7);
print_r($array);
echo "<br>";

array_pop($array);
print_r($array);
echo "<br>";

array_shift($array);
print_r($array);
echo "<br>";

array_unshift($array, 10);
print_r($array);
echo "<br>";

sort($array);
print_r($array);
echo "<br>";

$unique = array_unique($array);
print_r($unique);
echo "<br>";

$reversed = array_reverse($array);
print_r($reversed);
echo "<br>";

echo array_sum($array) . "<br>";

echo in_array(9, $array) ? "9 is in array<br>" : "9 is not in array<br>";
?>
