<?php
// Function to check if a number is an Armstrong number
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;  // Copy of the original number

    while ($temp != 0) {
        $digit = $temp % 10;          // Extract last digit
        $sum += $digit ** 3;          // Add cube of the digit to the sum
        $temp = (int)($temp / 10);    // Remove last digit
    }

    // Check if the sum of cubes is equal to the original number
    if ($sum == $num) {
        return true;  // It's an Armstrong number
    } else {
        return false; // Not an Armstrong number
    }
}

// Input number to check
$number = 153;

// Calling the function and displaying the result
if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
