<?php
// File path
$filename = "example.txt";

// Open the file in read mode
$file = fopen($filename, "r");

// Check if the file opened successfully
if ($file) {
    echo "File '$filename' opened successfully.";
    fclose($file); // Close the file after opening
} else {
    echo "Failed to open file '$filename'.";
}

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
