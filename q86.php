<?php
$conn = new mysqli("localhost", "root", "", "myDatabase");
if ($conn->connect_error) die("Connection failed");

$res = $conn->query("SELECT * FROM students");
while($row = $res->fetch_assoc()) {
    echo "<p>Name: {$row['name']} | Age: {$row['age']} | Email: {$row['email']}</p>";
}

$conn->close();

echo "<br>Code by Sarthak Gupta - 2220100292<br>";
?>
