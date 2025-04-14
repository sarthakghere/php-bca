<?php
// MySQL connection details
$servername = "localhost";
$username = "root";
$password = ""; // Set your MySQL password here

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to create database
$sql = "CREATE DATABASE myDatabase";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Database 'myDatabase' created successfully.";
} else {
    echo "Error creating database: " . $conn->error;
}

// Close connection
$conn->close();

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
