<?php
// Creating an associative array with subjects as keys and marks as values
$marks = array(
    "Mathematics" => 95,
    "Physics" => 88,
    "Chemistry" => 90,
    "English" => 85,
    "Computer Science" => 98
);

// Displaying the associative array in a tabular format
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Subject</th><th>Marks</th></tr>";

foreach ($marks as $subject => $mark) {
    echo "<tr>";
    echo "<td>$subject</td>";
    echo "<td>$mark</td>";
    echo "</tr>";
}

echo "</table>";
echo "<br>Code by Sarthak Gupta - 2220100292";
?>
