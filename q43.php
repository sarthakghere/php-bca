<?php
// Creating an associative array with key-value pairs
$student = array(
    "name" => "John Doe",
    "age" => 20,
    "grade" => "A",
    "subject" => "Mathematics"
);

// Accessing and displaying specific elements using keys
echo "Student Details:\n";
echo "Name: " . $student["name"] . "\n";
echo "Age: " . $student["age"] . "\n";
echo "Grade: " . $student["grade"] . "\n";
echo "Subject: " . $student["subject"] . "\n";

// Adding a new key-value pair to the associative array
$student["city"] = "New York";

// Displaying the updated associative array using a foreach loop
echo "\nUpdated Student Details:\n";
foreach ($student as $key => $value) {
    echo ucfirst($key) . ": $value\n";
}
echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
