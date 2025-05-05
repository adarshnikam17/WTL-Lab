<?php
// Abstract class
abstract class Person {
    public $name;
    public $age;

    abstract public function display();
}

// Inheritance
class Student extends Person {
    public $marks;
    public $cgpa;

    public function __construct($name, $age, $marks, $cgpa) {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
        $this->cgpa = $cgpa;
    }

    public function display() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Marks: " . $this->marks . "<br>";
        echo "CGPA: " . $this->cgpa . "<br>";
    }
}

// Interface
interface Details {
    public function studentDetails();
}

// Static method
class College implements Details {
    public static function collegeInfo() {
        echo "College Information: XYZ College<br>";
    }

    public function studentDetails() {
        echo "Student details are available.<br>";
    }
}

// Creating an object of Student class
$student = new Student("Adarsh Nikam", 22, 85, 9.2);
$student->display();

// Using static method
College::collegeInfo();
?>
