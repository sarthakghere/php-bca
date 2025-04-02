<?php
// Function with a parameter passed by reference
function addFive(&$num) {
    $num += 5;  // Modify the original variable by adding 5
}

// Initial value
$number = 10;

// Calling the function and passing the variable by reference
addFive($number);

// Displaying the modified value of $number
echo "The new value of the number is: " . $number;
echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
