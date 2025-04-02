<?php
// Recursive function to calculate the factorial of a number
function factorial($num) {
    if ($num <= 1) { 
        return 1;  // Base case: factorial of 0 or 1 is 1
    } else {
        return $num * factorial($num - 1);  // Recursive call
    }
}

// Calling the recursive function and printing the result
$number = 5;
$result = factorial($number);
echo "The factorial of $number is: " . $result;
echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
