<?php

// create class Person
class Person {
    // Create properties $name,$job and $age
    public $name;
    public $job;
    public $age;

    // Create a constructor that will accept $name,$job and $age variables and put them in class properties
    function __construct($name, $job, $age) {
        $this->name = $name;
        $this->job = $job;
        $this->age = $age;
    }

    // Create method changeJob  which will accept parameter $newJob
    function changeJob($newjob){
      $this->job = $newjob; // Change the person's job
    }

    // Create method happyBirthday which will increase age
    function happyBirthday(){
        ++$this->age;
    }
}
// Create two new people Tom with job "Button-Pusher", with age 34 and John with job "Lever-Puller" age 41
$person1 = new Person("Tom", "Button-Pusher", 34);
$person2 = new Person("John", "Lever-Puller", 41);




// Output their starting point
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
 
// Give Tom a promotion (change his job to "Box-Mover" using changeJob method) and a birthday
$person1->changeJob("Box-Mover");
$person1->happyBirthday();
// John just gets a year older
$person2->happyBirthday(); 
 
// Output the ending values
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
