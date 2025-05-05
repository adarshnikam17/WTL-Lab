<?php
$conn = mysqli_connect("localhost", "root", "your_password_here", "testdb");

$result = mysqli_query($conn, "SELECT * FROM students");

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . " - " . $row['age'] . "<br>";
}

mysqli_close($conn);
?>
