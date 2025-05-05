<?php
$array = array(1, 2, 3, 4, 5);

echo "Original Array: ";
print_r($array);
echo "<br>";

array_push($array, 6);
echo "After pushing 6: ";
print_r($array);
echo "<br>";

array_pop($array);
echo "After popping: ";
print_r($array);
echo "<br>";

array_shift($array);
echo "After shifting: ";
print_r($array);
echo "<br>";

array_unshift($array, 0);
echo "After unshifting 0: ";
print_r($array);
echo "<br>";

sort($array);
echo "After sorting: ";
print_r($array);
echo "<br>";

echo "Number of elements in array: " . count($array) . "<br>";
?>
