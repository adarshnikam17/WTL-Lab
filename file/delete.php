<?php
$file = "adarsh.txt";

if (file_exists($file)) {
    unlink($file); // delete file
    echo "File deleted successfully!";
} else {
    echo "File not found.";
}
?>
