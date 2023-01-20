<?php
// multipale trait
/* trait NumberSeriesOne{
    private function NumberSeriesA(){
        echo "Number Series A\n";
    }
    function NumberSeriesB(){
        echo "Number Series B\n";
    }
}
trait NumberSeriesTwo{
    use NumberSeriesOne;
    private function NumberSeriesC(){
        echo "Number Series C\n";
    }
    function NumberSeriesD(){
        echo "Number Series D\n";
    }
}

class NumberSeries{
    use NumberSeriesTwo;
}

$ns = new NumberSeries();
// $ns->NumberSeriesA();
$ns->NumberSeriesB();
$ns->NumberSeriesD(); */

// trait

/* trait NumberSeriesOne{
    function NumberSeriesA(){
        echo "Number Series A\n";
    }
    function NumberSeriesB(){
        echo "Number Series B\n";
    }
}
trait NumberSeriesTwo{
    function NumberSeriesC(){
        echo "Number Series C\n";
    }
    function NumberSeriesD(){
        echo "Number Series D\n";
    }
}

class NumberSeries{
    use NumberSeriesOne,NumberSeriesTwo;
}

$s = new NumberSeries();
$s->NumberSeriesA();
$s->NumberSeriesB();
$s->NumberSeriesC();
$s->NumberSeriesD(); */


// order precedent of trait method
/* trait NumberSeriesOne{
    function numberSeriesA(){
        echo "Number Series A\n";
        parent::numberSeriesA();
    }
    function numberSeriesB(){
        echo "Number Series B";
    }
}

class SomeClass{
    function numberSeriesA(){
        echo "printing + printing NumberSeriesA";
    }
}
class NumberSeries extends SomeClass{
    use NumberSeriesOne;
    // function numberSeriesA(){
    //     echo "Number Series A for Child";
    // }
}

$t=new NumberSeries();
$t->numberSeriesA(); */

// conflict rezulation od Trait Method 

 /* trait NumberSeriesOne{
    function numberSeriesA(){
        echo "Number Series AA";
    }
 }


trait NumberSeriesTwo{
    function numberSeriesA(){
        echo "number Series AAA";
    }
 }



 class NumberSeries{

    use NumberSeriesOne,NumberSeriesTwo{
        NumberSeriesOne::numberSeriesA as numberSeriesAA;
        NumberSeriesTwo::numberSeriesA as numberSeriesAAA;
    }

    function numberSeriesA(){
        echo "number Series A+++";
    }
 }

 $n = new NumberSeries();
 $n->numberSeriesAAA(); */


//  trait abstract, static and Properti

trait MyTrait{
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;
    function sayHi(){
        echo "Hi";
    }
}
class MyClassB{
    use MyTrait;
    function sayHi(){
        echo "Hello";
    }
}
MyClassA::$number = 2;
MyClassB::$number = 6;

echo MyClassA::$number;
echo MyClassB::$number;

$ma = new MyClassA();
$mb = new MyClassB();
echo $ma->sayHi();
echo $mb->sayHi();

echo $ma::$number;
echo $mb::$number;

?>