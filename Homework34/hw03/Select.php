<?php
class Select{
    //Property
    //Create String variable $name.
    private $name;

    //Create Array variable $value.      
    private $value;  
   
    //Methods
    // create methods getName() and  setName($name)
    //The string set by this method will be the name of the select field.
    public function setName($name){
      $this->name = $name;
    }
  
    public function getName(){
      return $this->name;
    }
   
    //Create method setVallue($value)
    //This methods provides the values used for the options
    //in the select field and checks to be sure the value is an array. 
    public function setValue($value){
      if (!is_array($value)){
         die ("Value is not an array.");
      }
      $this->value = $value;
    }

    //Create method getValue()
    public function getValue(){
      return $this->value;
    }

    // Create method makeOptions($value)
    //This method creates the actual select options. It is private, 
    //since there is no need for it outside the operations of the class.
    private function makeOptions($value){
      foreach($value as $key){
         echo "<option value=\"$key\">" .$key. "</option><br>";
       }
    }

    // Create method makeSelect()
    //This method puts it all together to create the select field.
    public function makeSelect(){
      echo "<select name=\"" .$this->getName(). "\"><br>";
      $this->makeOptions($this->getValue());
      echo "</select>" ;
      }
}
?>
  