<?php
// Define a date
$month = 2;
$day = 29;
$year = 2024;

// Check if the date is valid
if (checkdate($month, $day, $year)) {
    echo "The date $month/$day/$year is valid.";
} else {
    echo "The date $month/$day/$year is not valid.";
}

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
