<?php
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function speak() {
        echo "$this->name makes a sound.<br>";
    }
}

class Dog extends Animal {
    public function speak() {
        echo "$this->name barks.<br>";
    }
}

class Cat extends Animal {
    public function speak() {
        echo "$this->name meows.<br>";
    }
}

$dog = new Dog("Buddy");
$dog->speak();

$cat = new Cat("Whiskers");
$cat->speak();
?>
