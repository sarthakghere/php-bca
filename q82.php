<?php
$conn = new mysqli("localhost", "root", "");
if ($conn->connect_error) die("Connection failed");

$sql = "CREATE DATABASE myDatabase";
echo $conn->query($sql) ? "Database created" : "Error: " . $conn->error;

$conn->close();

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
