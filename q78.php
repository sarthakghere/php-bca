<?php
// File name
$filename = "output.txt";

// Open the file in write mode ("w" creates or overwrites the file)
$file = fopen($filename, "w");

// Check if file opened successfully
if ($file) {
    // Text to write
    $text = "Hello, this is written to the file using PHP.";

    // Write text to file
    fwrite($file, $text);

    // Close the file
    fclose($file);

    echo "Data written to file '$filename' successfully.";
} else {
    echo "Failed to open the file for writing.";
}

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
