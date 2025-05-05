<?php
$file = "adarsh.txt";

if (file_exists($file)) {
    $handle = fopen($file, "r"); // 'r' for read
    $contents = fread($handle, filesize($file));
    fclose($handle);

    echo "<pre>$contents</pre>";
} else {
    echo "File does not exist.";
}
?>
