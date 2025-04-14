<?php
// MySQL connection details
$servername = "localhost";
$username = "root";
$password = ""; // your MySQL password
$database = "myDatabase"; // database name (must already exist)

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create a table
$sql = "CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT,
    email VARCHAR(100)
)";

// Execute query
if ($conn->query($sql) === TRUE) {
    echo "Table 'students' created successfully.";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
