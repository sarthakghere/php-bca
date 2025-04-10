<?php
// Set location coordinates (e.g., Mumbai)
$latitude = 19.0760;
$longitude = 72.8777;
$timezoneOffset = 5.5; // IST (UTC +5:30)

// Use current date/time
$date = time();

// Get sunrise and sunset times
$sunrise = date_sunrise($date, SUNFUNCS_RET_STRING, $latitude, $longitude, 90, $timezoneOffset);
$sunset  = date_sunset($date, SUNFUNCS_RET_STRING, $latitude, $longitude, 90, $timezoneOffset);

// Display the results
echo "Location: Latitude $latitude, Longitude $longitude<br>";
echo "Sunrise Time: $sunrise<br>";
echo "Sunset Time: $sunset";

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
