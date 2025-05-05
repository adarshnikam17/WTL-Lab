<?php
$file = fopen("adarsh.txt", "a");
fwrite($file, "\nAppended line using PHP.");
fclose($file);
echo "Data appended.";
?>
