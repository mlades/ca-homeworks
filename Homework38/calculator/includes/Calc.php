<?php 
// use namespaces
namespace Calculator;
class Calc {
	//create properties for calculator
	public $num1;
	public $num2;
	public $cal;
	
	// create constructor method
	public function __construct($num1, $num2, $cal) {
		$this->num1 = $num1;
		$this->num2 = $num2;
		$this->cal = $cal;
	}

	// create calcMethod() that will make calculations
	public function calcMethod() {
		switch ($this->cal) {
			case 'add':
				$result = $this->num1 + $this->num2;
				break;
			case 'sub':
				$result = $this->num1 - $this->num2;
				break;
			case 'mul':
				$result = $this->num1 * $this->num2;
				break;
			default:
				$result = "Not valid operand";
				break;
		}
		return $result;
	}
 
}
?>