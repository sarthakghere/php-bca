<?php
// Defining a string
$text = "Hello, PHP String Demonstration!";

// String length
echo "String Length: " . strlen($text) . "\n";

// Word count
echo "Word Count: " . str_word_count($text) . "\n";

// Reverse the string
echo "Reversed String: " . strrev($text) . "\n";

// Find position of a word
echo "Position of 'PHP': " . strpos($text, "PHP") . "\n";

// Replace a word in the string
echo "Replaced String: " . str_replace("PHP", "String", $text) . "\n";

// Convert to uppercase
echo "Uppercase: " . strtoupper($text) . "\n";

// Convert to lowercase
echo "Lowercase: " . strtolower($text) . "\n";

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
