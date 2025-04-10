<?php
$numbers = [5, 2, 8, 1, 9, 3];
sort($numbers);
print_r($numbers); // Ascending order

rsort($numbers);
print_r($numbers); // Descending order

$students = ["John" => 85, "Alice" => 92, "Bob" => 78, "Jane" => 88];
asort($students);
print_r($students); // Sort by values (ascending)

arsort($students);
print_r($students); // Sort by values (descending)

ksort($students);
print_r($students); // Sort by keys (ascending)

krsort($students);
print_r($students); // Sort by keys (descending)

echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
