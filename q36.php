<?php
// Function with parameters to calculate the area of a rectangle
function calculateArea($length, $width) {
    $area = $length * $width;  // Calculate area
    return $area;              // Return the result
}

// Calling the function with parameters and printing the result
$rectangleArea = calculateArea(5, 10); 
echo "The area of the rectangle is: " . $rectangleArea . " square units.";
echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
