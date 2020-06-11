<?php
namespace mlades\select;

class HtmlSelect extends  ASelect {
    public function makeSelect(){
        echo "<select name=\"" .$this->getName(). "\"><br>";
        $this->makeOptions($this->getValue());
        echo "</select>" ;
    }
}

?>