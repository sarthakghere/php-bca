<?php
// File name
$filename = "introduction.txt";

// Biodata content
$biodata = "Name: John Doe\n";
$biodata .= "Age: 24\n";
$biodata .= "Qualification: B.Sc. in Computer Science\n";
$biodata .= "Skills: PHP, HTML, CSS, JavaScript\n";
$biodata .= "Hobbies: Reading, Coding, Music\n";

// Open the file in write mode
$file = fopen($filename, "w");

// Check and write to file
if ($file) {
    fwrite($file, $biodata);
    fclose($file);
    echo "File '$filename' created successfully with biodata.";
} else {
    echo "Failed to create the file.";
}

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
