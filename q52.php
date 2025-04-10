<?php
// Associative array
$students = [
    "John" => 85,
    "Alice" => 92,
    "Bob" => 78,
    "Jane" => 88
];

// Sorting the array by keys in ascending order
ksort($students);

// Displaying the sorted array
echo "Associative Array Sorted by Keys (Ascending):\n";
print_r($students);

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
