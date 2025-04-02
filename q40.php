<?php
// Function to calculate the number of digits in a number
function countDigits($num) {
    $count = 0;  // Initialize digit counter
    while ($num != 0) {
        $num = (int)($num / 10);  // Remove the last digit
        $count++;                 // Increment the count
    }
    return $count;  // Return the total count of digits
}

// Input number
$number = 12345;

// Calling the function and displaying the result
$digitCount = countDigits($number);
echo "The number $number has $digitCount digits.";
echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
