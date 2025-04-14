<?php
$conn = new mysqli("localhost", "root", "", "myDatabase");
if ($conn->connect_error) die("Connection failed");

$sql = "ALTER TABLE students ADD email VARCHAR(100)";
echo $conn->query($sql) ? "Table altered" : "Error: " . $conn->error;

$conn->close();

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
