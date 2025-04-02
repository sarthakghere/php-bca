<?php
// Numeric array (indexed)
$numbers = array(10, 20, 30, 40, 50);

// Accessing and displaying array elements using their index
echo "The numbers in the array are:\n";
for ($i = 0; $i < count($numbers); $i++) {
    echo "Index $i: " . $numbers[$i] . "\n";
}

// Adding a new element to the array
$numbers[] = 60;  // Adding 60 to the end of the array

echo "\nAfter adding a new element, the updated array is:\n";
foreach ($numbers as $index => $value) {
    echo "Index $index: $value\n";
}
echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
