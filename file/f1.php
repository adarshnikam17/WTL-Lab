<?php
$file = "adarsh.txt";
$handle = fopen($file, "w"); // 'w' for write

$text = "Hello, I am Adarsh Nikam.\nThis is my file.\n";

fwrite($handle, $text);
fclose($handle);

echo "File created and written successfully!";
?>
