<?php
class Person {
    
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function getName() {
        echo $this->name.' <br>';
    }

    function getAge() {
        echo $this->age .' <br>';
    }
}

$john = new Person("John", 30);

$john->getName();
$john->getAge();
var_dump($john);
?>