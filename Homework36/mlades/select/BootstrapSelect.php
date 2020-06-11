<?php
namespace mlades\select;

class BootstrapSelect extends  ASelect {
    const BOOTSTRAP_FORM_CLASS = "form-group";
    const BOOTSTRAP_SELECT_CLASS = "form-control";

    public function makeSelect(){
        echo "<div class=\"" .self::BOOTSTRAP_FORM_CLASS. "\">";
        echo "<select class=\"" .self::BOOTSTRAP_SELECT_CLASS. "\" name=\"" .$this->getName(). "\"><br>";
        $this->makeOptions($this->getValue());
        echo "</select>" ;
        echo "</div>";
    }
}

?>