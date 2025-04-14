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

// SQL to insert data
$sql = "INSERT INTO students (name, age, email, gender) 
        VALUES ('Alice Johnson', 22, 'alice@example.com', 'Female')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully into 'students' table.";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
