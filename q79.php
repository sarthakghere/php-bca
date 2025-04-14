<?php
// File name
$filename = "output.txt";

// Open the file in read mode
$file = fopen($filename, "r");

// Check if file opened successfully
if ($file) {
    // Get file size
    $filesize = filesize($filename);

    // Read the file content
    $content = fread($file, $filesize);

    // Display the content
    echo "File content:<br>" . nl2br($content);

    // Close the file
    fclose($file);
} else {
    echo "Failed to open the file for reading.";
}

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
