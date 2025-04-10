<?php
// Defining a string
$text = "Hello, PHP String Demonstration!";

// String length
echo "String Length: " . strlen($text) . "<br>";

// Word count
echo "Word Count: " . str_word_count($text) . "<br>";

// Reverse the string
echo "Reversed String: " . strrev($text) . "<br>";

// Find position of a word
echo "Position of 'PHP': " . strpos($text, "PHP") . "<br>";

// Replace a word in the string
echo "Replaced String: " . str_replace("PHP", "String", $text) . "<br>";

// Convert to uppercase
echo "Uppercase: " . strtoupper($text) . "<br>";

// Convert to lowercase
echo "Lowercase: " . strtolower($text) . "<br>";

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
