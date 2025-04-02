<?php
// Creating a multidimensional array with student data
$students = array(
    array(
        "name" => "John Doe",
        "age" => 20,
        "subjects" => array("Mathematics" => 90, "Physics" => 85, "English" => 88)
    ),
    array(
        "name" => "Jane Smith",
        "age" => 19,
        "subjects" => array("Mathematics" => 92, "Physics" => 89, "English" => 91)
    ),
    array(
        "name" => "Alice Johnson",
        "age" => 21,
        "subjects" => array("Mathematics" => 88, "Physics" => 90, "English" => 87)
    )
);

// Displaying the multidimensional array in a tabular format
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Name</th><th>Age</th><th>Subjects and Marks</th></tr>";

foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student["name"] . "</td>";
    echo "<td>" . $student["age"] . "</td>";
    
    // Displaying subjects and marks
    echo "<td>";
    foreach ($student["subjects"] as $subject => $marks) {
        echo "$subject: $marks<br>";
    }
    echo "</td>";
    
    echo "</tr>";
}

echo "</table>";
echo "<br>Code by Sarthak Gupta - 2220100292";
?>
