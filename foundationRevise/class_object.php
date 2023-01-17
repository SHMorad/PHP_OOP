<?php
// Class Object method property

/* class Human{
    public $name;
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }
    private function sayName(){
        echo "My Name is {$this->name}\n";
    }

}

class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}
class Dog{
    function sayHi(){
        echo "woof\n";
    }
}
// $h1 = new Human;
// $c1 = new Cat();
// $d1 = new Dog();
// $h1->sayHi();
// $c1->sayHi();
// $d1->sayHi();
// $h1->name ="Morad\n";
// echo $h1->name;
$h2 = new Human();

$h2->name ="Sahadat\n";
$h2->age = 12;

echo $h2->age;
echo "\n";
$h2->sayHi();
echo $h2->name;
// $h2->sayName(); */

// __construct method

/* class Human{
    public $name;
    public $age;
    public function __construct($personName, $personAge=0){
        $this->name = $personName;
        $this->age = $personAge;
    }

    public function sayName(){
        if($this->age){
        echo "My Name is {$this->name}, And I am {$this->age} years old\n";
        }else{
            echo "My Name is {$this->name},I don't Name How was i am.\n";
        }
    }
}

$h1 = new Human("Morad", 12);
$h1->sayName();

$h2 = new Human("sahadat", 22);
$h2->sayName();
$h3 = new Human("Ab Rahaman");
$h3->sayName(); */

// use of private method

/* class Fund{
    private $fund = 0;
    public function __construct($initialFund=0){
            $this->fund = $initialFund;
            // $this->deductFund(10);
    }
    public function addFund($money){
        $this->fund +=$money;
    }
    // private function deductFund($money){
    public function deductFund($money){
        $this->fund-=$money;
    }
    public function getTotal(){
        echo "Total Fund is = {$this->fund}\n";
    }
}

$f1 = new Fund();
$f1->getTotal();
$f1->addFund(100);
$f1->getTotal();
$f1->deductFund(40);
$f1->getTotal();
 */

/* 
class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;
    public function __construct($colorCode=''){
        $this->color = ltrim($colorCode,'#');
        $this->parseColor();
    }
    public function getColor(){
        return $this->color;
    }
    public function getRGBColor(){
        return array($this->red, $this->green, $this->blue);
    }
    public function readRGBColor(){
        echo "Red = $this->red\n Green = $this->green\n Blue = $this->blue";
    }
    public function setColor($colorCode){
        $this->color = ltrim($colorCode,'#');
        $this->parseColor();
    }
    private function parseColor(){
        if($this->color){
            list($this->red, $this->green, $this->blue)=sscanf($this->color,"%02x%02x%02x");
        }else{
            list($this->red,$this->green, $this->blue)=array(0,0,0);
        }
    }
    public function getRed(){
        return $this->red;
    }
    public function getGreen(){
        return $this->green;
    }
    public function getBlue(){
        return $this->blue;
    }
}
$myColor = new RGB("#ffffff");
$myColor->readRGBColor();
echo PHP_EOL;
echo $myColor->getRed();
echo $myColor->getGreen();
echo $myColor->getBlue();
*/


// inharitance and Protected

/* class Animal{
    public function __construct($name){
        $this->name = $name;
    }
    public function eat(){
        echo "{$this->name} is Eating\n";
    }
    public function run(){
        echo "{$this->name} is runnig\n";
    }
    public function sleep(){
        echo "{$this->name} is sleeping\n";
    }
    public function greet(){}
    public function addTittle($title){
        $this->name = $title."".$this->name;
    }
}
class Human extends Animal{
    public function greet(){
        $this->addTittle("Mr. ");
        echo "{$this->name} says Hi\n";
    }
}
class Cat extends Animal{
    public function greet(){
        echo "{$this->name} says Meow\n";
    }
} 
$morad = new Human('Morad');
$morad->eat();
$morad->run();
$morad->sleep();
echo PHP_EOL;
echo $morad->greet();

$cat = new Cat("Tom");
$cat->eat();
$cat->run();
$cat->sleep();
echo $cat->greet();
 */

//  child class and parent class er scope niye alochona

/* class parentClass{
    protected $name;
    public function __construct($name){
        $this->name = $name;
        $this->sayHi();
    }
    public function sayHi(){
        echo "Hi from {$this->name}\n";
    }
}
class childClass extends parentClass{
    public function sayHi(){
        parent::sayHi();
        echo "Hello";
    }
}

$cc = new childClass("Morad");
// $cc->sayHi(); */

// Example of inheritance
/* class Shape{
    protected $name;
    protected $area;
    public function __construct($name){
        $this->name = $name;
        $this->calculateArea();
    }
    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}\n";
    }
    public function calculateArea(){}
}
class Triangle extends Shape{
    private $a, $b, $c;
public function __construct($a, $b, $c){
    $this->a =$a;
    $this->b =$b;
    $this->c =$c;
    parent::__construct("Triangle");
}
public function calculateArea(){
    $perimeter = ($this->a + $this->b + $this->c)/2;
    $this->area = sqrt($perimeter*($perimeter-$this->a)*($perimeter-$this->b));
}
}

class Rectangle extends Shape{
    private $a, $b;
    public function __construct($a, $b){
        $this->a =$a;
        $this->b =$b;
        parent::__construct("Rectangle");
    }
    public function calculateArea(){
        $this->area = $this->a * $this->b;
    }
}

$r = new Rectangle(2,4);
$r->getArea();

$t = new Triangle(2,3,5);
$t->getArea(); */


// abstract class and abstract method

/* abstract class OurClass{
    function sayHi(){
        echo "Hi";
    }
    abstract function eat($a, $b=0);
}

class MyClass extends OurClass{
    function eat($x, $y=0){
        echo "I am Eating";
    }
}
$mc = new MyClass();
$mc->eat(1, 0); */


?>