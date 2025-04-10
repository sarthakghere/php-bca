<?php
// Set the date, latitude, longitude
$date = time(); // current date and time
$latitude = 28.6139;   // Example: New Delhi latitude
$longitude = 77.2090;  // Example: New Delhi longitude

// Get sunrise and sunset times
$sunrise = date_sunrise($date, SUNFUNCS_RET_STRING, $latitude, $longitude, 90, 5.5);
$sunset = date_sunset($date, SUNFUNCS_RET_STRING, $latitude, $longitude, 90, 5.5);

// Display results
echo "Sunrise Time: $sunrise\n";
echo "Sunset Time: $sunset";

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
