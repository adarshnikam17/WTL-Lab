<?php
$conn = mysqli_connect("localhost", "root", "your_password_here", "testdb");

$sql = "DELETE FROM students WHERE name = 'Adarsh Nikam'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
