<?php
$conn = mysqli_connect("localhost", "root", "your_password_here", "testdb");

$sql = "INSERT INTO students (name, age) VALUES ('Adarsh Nikam', 21)";
if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
