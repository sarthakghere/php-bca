<?php
// Create a DateTime object for the current date
$date = new DateTime("2025-04-02");

// Add 10 days to the date
$date->add(new DateInterval('P10D'));

// Display the new date
echo "New Date after adding 10 days: " . $date->format('Y-m-d');

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
