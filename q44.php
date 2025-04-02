<?php
// Creating an associative array with subjects as keys and marks as values
$marks = array(
    "Mathematics" => 95,
    "Physics" => 88,
    "Chemistry" => 90,
    "English" => 85,
    "Computer Science" => 98
);

// Displaying the subjects and marks using a foreach loop
echo "Subject-wise Marks:\n";
foreach ($marks as $subject => $mark) {
    echo "$subject: $mark\n";
}

// Calculating and displaying the total and average marks
$totalMarks = array_sum($marks);
$averageMarks = $totalMarks / count($marks);

echo "\nTotal Marks: $totalMarks\n";
echo "Average Marks: $averageMarks\n";
echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
