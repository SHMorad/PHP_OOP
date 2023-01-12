<?php
// Construct saying megic Method;

class Human{
    public function __construct($personName, $personAge=0){
        // echo "Calling By Constructor Method";
        $this->name=$personName;
        $this->age=$personAge;

    }

    function sayHi(){
        echo "Salam\n";
        $this->sayName();

    }
    function sayName(){
        if($this->age){
            echo "My name is {$this->name}, i am {$this->age} years old.\n"; 
        }else{
            echo "My name is {$this->name}, i don't know how old i am.\n";
        }
        
        
    }
}

$h1=new Human("morad", 22);
$h2=new Human("mehedi", 34);
$h3=new Human("lulukhan");
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();