<?php
$conn = mysqli_connect("localhost", "root", "your_password_here", "testdb");

$sql = "UPDATE students SET age = 22 WHERE name = 'Adarsh Nikam'";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
