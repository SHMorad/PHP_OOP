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

// Use of Final keyword
// final keyword function ke kokhon o over ride korte deyna

/* abstract class OurClass{
    final public function doSomething(){
        echo "Do Something";
    }
}
class MyClass extends OurClass{
    // public function doSomething(){
    //     echo "Do Nothing";
    // }
}
$t = new MyClass();
$t->doSomething(); */

// use of better Code in php
/* class Shape{

}
class Shapes{
    private $shapes;
    public function __construct(){
        $this->shapes =[];
    }
    public function addShape(Shape $shape){
        array_push($this->shapes, $shape);
    }
    public function totalShapes(){
        // $ca =join(', ', $this->shapes);
        // foreach($this->shapes as $shape){
        //     // return $shape;
        //     echo $shape;
        // }
        return count($this->shapes);
    }
}

class Triangle extends Shape{

}
class Rectangle extends Shape{

}
class Student{

}
$shapeCollection = new Shapes();
$shapeCollection->addShape(new Triangle);
$shapeCollection->addShape(new Rectangle);
// $shapeCollection->addShape(new Student);
echo $shapeCollection->totalShapes() */;


// interface and polymerphisom

/* 
interface BaseClass{
    public function isAlive();
    public function canEat();
    public function breed();
}
class Animal implements BaseClass{
    public function isAlive(){}
    public function canEat(){}
    public function breed(){}
}
interface BaseHuman extends BaseClass{
public function canTalk();
}


// class Human implements BaseHuman{
//     public function isAlive(){}
//     public function canEat(){}
//     public function breed(){}
//     public function canTalk(){}
// }
$cat = new Animal();
echo $cat instanceof BaseClass;

abstract class AbstractHuman implements BaseHuman{
    abstract public function eat();
    public function run(){
        echo "i am running";
    }
}
class Human extends AbstractHuman{
    public function isAlive(){}
    public function canEat(){}
    public function breed(){}
    public function canTalk(){}
    public function eat(){}
} */


// class static method and properties

/* class MathCalculator{
    private $number;
    static $name;
    static function fibonacchi($n){
        self::doSomething();
        echo self::$name;
        echo "Fibonacchi series up to {$n}\n";

    }
    static function doSomething(){
        echo "Doing Something\n";
    }
    function factorial($n){
        self::$name ="ABC\n";
        self::doSomething();
        $this->doSomething();
        $this->number =23;
        echo "calculating factorial of {$n}\n";
    }
}
$math = new MathCalculator();
$math->factorial(12);
MathCalculator::fibonacchi(7);
echo MathCalculator::$name; */


// child class e static method override

/* class A{
    static public function sayHi(){
        echo "Hi from A\n";
    }
}
class B extends A{
    static public function sayHi(){
        parent::sayHi();
        echo "Hi From B\n";
        
    }
    
}
// $b = new B();
// $b->sayHi();
B::sayHi(); */

// use of static scope

/* class A{
    // public static $name;
    protected static $name;
    static function sayHi(){
        self::$name ="Hello\n";
        echo "Hi from A\n";
    }
}
class B extends A{
    static public function sayHi(){
        parent::sayHi();
        echo parent::$name;
        echo "Hi from B\n";
    }
    
}
B::sayHi();
// echo B::$name; */

// make class constant

/* define('ok',123);
// const MORAD = "patwary";
// echo ok;
// echo MORAD;

class MyClass{
    const CITY = "Dhaka\n";
    function sayHi(){
        // echo "Hi from ".$this::CITY;
        echo "Hi from ".self::CITY;

    }
}
$m = new MyClass();
$m->sayHi();
echo MyClass::CITY; */

// php class megic method
/* 
class Student{
    private $name;
    private $age;
    private $class;

    function __construct($name='', $age='', $class=''){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }
    // public function getName(){
    //     return $this->name;
    // }
    // public function setName($name){
    //     $this->name = $name;
    // }
    // public function getAge(){
    //     echo $this->age;
    // }
    // public function setAge($age){
    //     $this->age = $age;
    // }
    // public function getClass(){
    //    return $this->class;
    // }
    // public function setClass($class){
    //     $this->class = $class;
    // }
        public function __get($prop){
            return $this->$prop;

        }
        public function __set($prop, $value){
            return $this->$prop = $value;
        }

}
// $c = new Student("morad", "22", "six");
// $c->setName("Morad");
// $s = new Student();
//  $s->setClass("Nine");
//  echo $s->getClass(); 
//  $ms = new Student("Morad", "23", "Computer");
 $ms = new Student();

 echo $ms->name ="morad"; */


/*  class DistrictCollection implements IteratorAggregate,countable{
    private $districs;
    function __construct(){
        $this->districs = array();
    }
    function add($district){
        array_push($this->districs, $district);
    }
    function getDistrics(){
        return $this->districs;
    }
    function getIterator(){
        return new ArrayIterator($this->districs);
    }
    function count(){
        return count($this->districs);
    }
 }

 $distrits = new DistrictCollection();
 $distrits->add("cummilla");
 $distrits->add("chandpur");
 $distrits->add("dhaka");
 $distrits->add("sylhet");

//  $_districts = $distrits->getDistrics();
//  print_r($_districts);
//  foreach($_districts as $_district){
//     echo $_district."\n";
//  }


//  foreach($distrits as $district){
//     echo $district."\n";
//  }

echo count($distrits); */


// object cloning

/* class FavColor{
    public $data;
    public function __construct($data){
        $this->data = $data;
    }
    public function setData($data){
        return $this->data = $data;
    }
}

$fc1= new FavColor("some Data");
// echo $fc1->setData("Hello");
$fc2 =clone $fc1;
$fc2->setData("More Data");
print_r($fc1);
print_r($fc2); */
/* class Color{
    public $color;
    public function __construct($color){
        $this->color = $color;
    }
    public function setColor($color){
        $this->color = $color;
    }
}
class FavColor{
    public $data;
    public $color;
    public function __construct($data, $color){
        $this->data = $data;
        $this->color =new Color($color);
    }
    // public function setData($data){
    //     return $this->data = $data;
    // }
    public function updateColor($color){
        $this->color->setColor($color);
    }
    public function __clone(){
        $this->color = clone $this->color;
    }
}

$fc1= new FavColor("some Data", "red");
// echo $fc1->setData("Hello");
// $fc2 = clone $fc1;

// print_r($fc1);
// print_r($fc2);
// $fc2->setData("More Data");
// print_r($fc1);
// print_r($fc2);
print_r($fc1);

$fc2 =clone $fc1;
print_r($fc2);
$fc2->updateColor("green");
print_r($fc1);
print_r($fc2) */



// convert string to object

/* class Color{
    public $color;
    public function __construct($color){
        $this->color = $color;
    }
    public function getColor($color){
        $this->color = $color;

    }

    public function __toString(){
        return "The Color is {$this->color}";
    }
}

$c = new Color("red");
echo $c; */

// Comparing Object

/* class Planet{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
}

$e = new Planet("Earth");
$e2 =$e;
$e1 = new Planet("Earth");
$m = new Planet("Mars");

if($e === $e2){
    echo "similer Planet";
}else{
    echo "Not Similar Planet";
}
 */

//  late binding and arly binding

/* class Planet{
    static function echoName(){
        // echo static::getName(); //late binding
        echo self::getName();//early binding
    }
    static function getName(){
        return "Planet";
    }

}

class Earth extends Planet{
    static function getName(){
        return "Earth";
    }
}
Earth::echoName(); */

// propertie overloading isset and unset magic method

/* class MotorCycle{
    private $displacement, $capacity, $mileage;
    function __construct($displacement, $capacity, $mileage){
        $this->displacement = $displacement;
        $this->capacity = $capacity;
        $this->mileage = $mileage;
    }
    public function getDisplay(){
        return $this->displacement;
     }
    public function setDisplay($displacement){
        $this->displacemrnt = $displacement;
    }
    public function __get($name){
        echo $this->$name;
    }
}

$pulsar = new MotorCycle("160CC", "16ltr", "150kmph");
echo $pulsar->getDisplay();

echo $pulsar->displacement;
echo $pulsar->capacity; */

/* class MotorCycle{
    private $perameters;
    function __construct($displacement, $capacity, $mileage){
        $this->perameters = [];
        $this->perameters['displacement'] = $displacement;
        $this->perameters['capacity'] = $capacity;
        $this->perameters['mileage'] = $mileage;
    }
    // public function getDisplay(){
    //     return $this->perameters['displacement'];
    //  }
    // public function setDisplay($displacement){
    //     $this->perameters['displacement'] = $displacement;
    // }

    public function __isset($name){
        if(!isset($this->perameters[$name])){
            echo "{$name} is not found\n";
            return false;
        }
        return true;
    }
    public function __unset($name){
        print_r($this->perameters);
        unset($this->perameters[$name]);
        print_r($this->perameters);
    }
    public function __get($name){
        echo $this->perameters[$name];
    }
    public function __set($name, $value){
        $this->perameters[$name] = $value;
    }
}

$pulsar = new MotorCycle("160CC", "16ltr", "150kmph");
// echo $pulsar->getDisplay();
echo $pulsar->displacement;
echo $pulsar->capacity;
echo $pulsar->mileage;
echo "\n";

if(isset($pulsar->tierSize)){
    echo "Found\n";
}else{
    echo "Not Found\n";
}
unset($pulsar->mileage); */

//  method overloding with __call & __callStatic
 

 class MotorCycle{
    private $perameters;
    function __construct($displacement, $capacity, $mileage){
        $this->perameters = [];
        $this->perameters['displacement'] = $displacement;
        $this->perameters['capacity'] = $capacity;
        $this->perameters['mileage'] = $mileage;
    }

    public function __isset($name){
        if(!isset($this->perameters[$name])){
            echo "{$name} is not found\n";
            return false;
        }
        return true;
    }
    public function __unset($name){
        print_r($this->perameters);
        unset($this->perameters[$name]);
        print_r($this->perameters);
    }
    public function __get($name){
        echo $this->perameters[$name];
    }
    public function __set($name, $value){
        $this->perameters[$name] = $value;
    }

    public function __call($name, $arguments){
        if('run'== $name){
            if($arguments){
                echo "I am running {$arguments[0]}";
            }else{
                echo "I am running";
            }
        }
    }
    static function __callStatic($name, $arguments){
        echo "Static Call";
    }
}
MotorCycle::wash();
$pulsar = new MotorCycle("160CC", "16ltr", "150kmph");
// echo $pulsar->getDisplay();
echo $pulsar->displacement;
echo $pulsar->capacity;
echo $pulsar->mileage;
echo "\n";

if(isset($pulsar->tierSize)){
    echo "Found\n";
}else{
    echo "Not Found\n";
}
unset($pulsar->mileage);
$pulsar->run('1000kmph');


?>