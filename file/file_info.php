<?php
$file = "adarsh.txt";
if (file_exists($file)) {
    echo "Filename: " . basename($file) . "<br>";
    echo "Size: " . filesize($file) . " bytes<br>";
    echo "Modified: " . date("F d Y H:i:s.", filemtime($file));
} else {
    echo "File not found.";
}
?>
