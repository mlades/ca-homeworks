<?php

include 'includes/Calc.php';

use Calculator\Calc;

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$cal = $_POST['cal'];
// create (instanciate) Calc class with paramters $num1, $num2, $calc
$calc = new Calc($num1, $num2, $cal);

// output result
echo $calc->calcMethod(); 

?>