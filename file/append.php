<?php
$file = "adarsh.txt";
$handle = fopen($file, "a"); // 'a' for append

$text = "Adding new line: PHP is awesome!\n";

fwrite($handle, $text);
fclose($handle);

echo "Data appended successfully!";
?>
