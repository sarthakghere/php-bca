<?php
// Get local time as an array
$localTime = localtime(time(), true);

// Display each component of the local time
echo "Local Time Details:\n";
echo "Seconds: " . $localTime['tm_sec'] . "\n";
echo "Minutes: " . $localTime['tm_min'] . "\n";
echo "Hours: " . $localTime['tm_hour'] . "\n";
echo "Day of Month: " . $localTime['tm_mday'] . "\n";
echo "Month (0-11): " . $localTime['tm_mon'] . "\n";
echo "Year (since 1900): " . $localTime['tm_year'] . "\n";
echo "Weekday (0=Sunday): " . $localTime['tm_wday'] . "\n";
echo "Year Day (0-365): " . $localTime['tm_yday'] . "\n";
echo "Is DST: " . $localTime['tm_isdst'];

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
