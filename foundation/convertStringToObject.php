<?php
class color{
    public $color;
    function __construct($color){
        $this->color = $color;
    }
    function setColor(){
        $this->color = $color;
    }
    function __toString(){
        return "The Color is {$this->color}.";
    }
}

$c = new color("Red");

echo $c;

?>