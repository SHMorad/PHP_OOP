<?php
class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }
    function sayName(){
        echo "The Name is {$this->name}";
    }
}
class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}
class Dog{
    function sayHi(){
        echo "Woof.!\n";
    }
}

/* $h1 = new Human();
$c1 =new Cat;
$d1 = new Dog;
$h1->sayHi();
$c1->sayHi();
$d1->sayHi();
$h1->name="Morad\n";//set
echo $h1->name;//get

$h2= new Human;
$h2->name="SH Morad\n"; */
// $h2->sayName();
// echo $h2->name;
$h1=new Human();
$h2=new Human();

$h1->name = "Morad\n";
$h2->name="SH Morad\n";
$h1->sayHi();
$h2->sayhi();

?>