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

// SQL to alter the table - adding a new column 'gender'
$sql = "ALTER TABLE students ADD gender VARCHAR(10)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table 'students' altered successfully. Column 'gender' added.";
} else {
    echo "Error altering table: " . $conn->error;
}

// Close connection
$conn->close();

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
