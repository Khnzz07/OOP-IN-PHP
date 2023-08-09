<?php
class Student {
    public $name;
    public $age;
    public $grade;

    function __construct($name, $age, $grade) {
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
    }

    function introduce() {
        return "Hi, I'm {$this->name}, {$this->age} years old, and I'm in grade {$this->grade}.";
    }
}

$student1 = new Student("Alice", 18, 12);
$student2 = new Student("Bob", 17, 11);

echo $student1->introduce(); // Output: Hi, I'm Alice, 18 years old, and I'm in grade 12.
echo $student2->introduce(); // Output: Hi, I'm Bob, 17 years old, and I'm in grade 11.


?>