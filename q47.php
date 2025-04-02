<?php
// Defining a class named Student
class Student {
    // Properties (attributes) of the class
    public $name;
    public $age;
    public $grade;

    // Constructor to initialize object properties
    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    // Method to display student details
    public function displayDetails() {
        echo "Student Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Grade: " . $this->grade . "<br>";
    }
}

// Creating objects of the Student class
$student1 = new Student("John Doe", 20, "A");
$student2 = new Student("Jane Smith", 19, "B+");

// Displaying details using the displayDetails() method
echo "<h3>Student 1 Details:</h3>";
$student1->displayDetails();

echo "<h3>Student 2 Details:</h3>";
$student2->displayDetails();
echo "\nCode by Sarthak Gupta - 2220100292\n";
?>
