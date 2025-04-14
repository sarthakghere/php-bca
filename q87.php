<?php
$conn = new mysqli("localhost", "root", "", "myDatabase");
if ($conn->connect_error) die("Connection failed");

$res = $conn->query("SELECT * FROM students");
echo "<table border='1'><tr><th>Name</th><th>Age</th><th>Email</th></tr>";
while($row = $res->fetch_assoc())
    echo "<tr><td>{$row['name']}</td><td>{$row['age']}</td><td>{$row['email']}</td></tr>";
echo "</table>";

$conn->close();
echo "<br>Code by Sarthak Gupta - 2220100292<br>";
?>
