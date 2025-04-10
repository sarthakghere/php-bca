<?php
// Date of birth (format: YYYY-MM-DD)
$dob = "2000-03-15";

// Convert DOB to DateTime object
$birthDate = new DateTime($dob);

// Get current date
$today = new DateTime();

// Calculate the difference
$age = $birthDate->diff($today);

// Display the age
echo "Date of Birth: " . $dob . "<br>";
echo "Current Date: " . $today->format('Y-m-d') . "<br><br>";

echo "Age is: " . $age->y . " years, " . $age->m . " months, " . $age->d . " days.";

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
