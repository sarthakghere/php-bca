<?php
$conn = new mysqli("localhost", "root", "", "myDatabase");
if ($conn->connect_error) die("Connection failed");

$sql = "CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    age INT
)";
echo $conn->query($sql) ? "Table created" : "Error: " . $conn->error;

$conn->close();

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
