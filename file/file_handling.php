<?php
$filename = "adarsh.txt";

$file = fopen($filename, "w");
fwrite($file, "My name is Adarsh Nikam.\nWelcome to PHP file handling.");
fclose($file);

$file = fopen($filename, "r");
$content = fread($file, filesize($filename));
fclose($file);
echo nl2br($content);

$file = fopen($filename, "a");
fwrite($file, "\nThis is new appended line.");
fclose($file);

$file = fopen($filename, "r");
$content = fread($file, filesize($filename));
fclose($file);
echo "<br><br>After Append:<br>";
echo nl2br($content);
?>
