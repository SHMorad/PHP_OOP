<?php
/* class MathCalculator{
    private $number;
    static $name;

    static function fibonacchi($n){
         
        echo self::$name;
        self::doSomething();
        echo "fibonacchi series up to {$n}\n";
    }
    static function doSomething(){
        echo "Doing SomeThing\n";
    }
    function factorial($n){
        self::$name = "ABC\n";
        self::doSomething();
        $this->doSomething();
        $this->number= 23;
        echo "Calcluting factorial of {$n}\n";
    }
}
$math = new MathCalculator();
$math->factorial(12);
$math->fibonacchi(10);
MathCalculator::fibonacchi(7);//static keyword use korle e babe call korajay,,ete memory kom use hoy;
echo MathCalculator::$name; */


// child class e static Method er use

/* class A{
    static function sayHi(){
        echo "Hi From A\n";

    }


}

class B extends A{
    static function sayHi(){
        echo "Hi From B\n";
        parent::sayHi();
    }
}

B::sayHi(); */

// child class e static Method er use and static method scope

/* class A{
    protected static $name;//public 
    static function sayHi(){
        self::$name = "Hello\n";
        echo "Hi From A\n";

    }


}

class B extends A{
    static function sayHi(){
        echo "Hi From B\n";
        parent::sayHi();
        echo parent::$name;
    }
}

B::sayHi();
// echo B::$name; */



// make class constant

define("ok",123);
class MyClass{
    const CITY="Dhaka";
    function sayHi(){
        echo "Hi from ".self::CITY; //$this::CITY;
    }
}
$m = new MyClass();
$m->sayHi();
echo MyClass::CITY;

?>