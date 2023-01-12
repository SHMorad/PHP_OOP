<?php
class parentClass{
    protected $name;

    function __construct($name){
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi(){
        echo "His From {$this->name}\n";
    }
}

class childClass extends parentClass {

    function sayHi(){
        parent::sayHi();
        echo "Hello\n";
    }
}

$cc = new childClass("ABCD");


?>