<?php
if (file_exists("adarsh.txt")) {
    unlink("adarsh.txt");
    echo "File deleted.";
} else {
    echo "File does not exist.";
}
?>
