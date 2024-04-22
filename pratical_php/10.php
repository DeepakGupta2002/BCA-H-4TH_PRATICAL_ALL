<?php

class Student {
    private $name;
    private $age;
    private $grade;

    public function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    public function displayInformation() {
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Grade: " . $this->grade . "\n";
    }
}

// Example usage
$student1 = new Student("John Doe", 18, "12th");
echo "Student 1 Information:\n";
$student1->displayInformation();
echo "\n";

$student2 = new Student("Jane Smith", 17, "11th");
echo "Student 2 Information:\n";
$student2->displayInformation();

?>
