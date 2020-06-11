<?php
namespace mlades\select;

abstract class Aselect {
    protected $name;
    protected $values;

    public function setName($name){
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }

    public function setValue($value){
        if (!is_array($value)){
           die ("Value is not an array.");
        }
        $this->value = $value;
    }
  
    public function getValue(){
        return $this->value;
    }

    protected function makeOptions($value){
        foreach($value as $key){
           echo "<option value=\"$key\">" .$key. "</option><br>";
         }
    }

    public abstract function makeSelect();

}
?>