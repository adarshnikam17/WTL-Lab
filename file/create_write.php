<?php
$file = fopen("adarsh.txt", "w");
fwrite($file, "My name is Adarsh Nikam.");
fclose($file);
echo "File created and data written.";
?>
