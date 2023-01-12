<?php
// interface And polymerpijom

interface BaseAnimal{
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}


class Animal implements BaseAnimal{
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
}

interface BaseHuman extends BaseAnimal{
    function canTalk();
}
$cat = new Animal();
echo $cat instanceof Human;
// $h $cat instanceof BaseHuman;
abstract class abstractHuman implements BaseHuman{
    abstract public function run();
    function eat(){
        echo "i am Eating";
    }
}
class Human implements BaseHuman{
    function isAlive(){}
    function canEat($param1, $param2){}
    function breed(){}
    function canTalk(){} 
    function run(){}
}
$h = new Human();
?>

