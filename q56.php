<?php
// Define a string
$text = "Hello World, PHP is awesome!";
$vowelCount = 0;

// Convert string to lowercase for easier comparison
$text = strtolower($text);

// Loop through each character and check for vowels
for ($i = 0; $i < strlen($text); $i++) {
    if (in_array($text[$i], ['a', 'e', 'i', 'o', 'u'])) {
        $vowelCount++;
    }
}

echo "Number of vowels in the string: $vowelCount";

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
