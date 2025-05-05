<?php
$conn = mysqli_connect("localhost", "root", "Adarsh@1708", "testdb");
if (!$conn) {
    die("Connection failed");
}
echo "Connected successfully";
?>
