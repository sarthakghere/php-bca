<?php
// Get local time as an array
$localTime = localtime(time(), true);

// Display each component of the local time
echo "Local Time Details:<br>";
echo "Seconds: " . $localTime['tm_sec'] . "<br>";
echo "Minutes: " . $localTime['tm_min'] . "<br>";
echo "Hours: " . $localTime['tm_hour'] . "<br>";
echo "Day of Month: " . $localTime['tm_mday'] . "<br>";
echo "Month (0-11): " . $localTime['tm_mon'] . "<br>";
echo "Year (since 1900): " . $localTime['tm_year'] . "<br>";
echo "Weekday (0=Sunday): " . $localTime['tm_wday'] . "<br>";
echo "Year Day (0-365): " . $localTime['tm_yday'] . "<br>";
echo "Is DST: " . $localTime['tm_isdst'];

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
