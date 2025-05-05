<?php
$file = fopen("adarsh.txt", "r");
$content = fread($file, filesize("adarsh.txt"));
fclose($file);
echo nl2br($content);
?>
