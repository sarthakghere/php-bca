<?php
// MySQL connection details
$servername = "localhost";
$username = "root";
$password = ""; // your MySQL password
$database = "myDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to select data
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Display data
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>";
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Age: " . $row["age"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Gender: " . $row["gender"];
        echo "</p><hr>";
    }
} else {
    echo "<p>No records found.</p>";
}

$conn->close();

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
