<?php
class Animal{
    protected $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function eat(){
        echo "{$this->name} is Eating\n";
    }
    public function run(){
        echo "{$this->name} is Running\n";
    }
    public function sleep(){
        echo "{$this->name} is Sleeping\n";
    }
    public function greed(){}
    protected function addTitle($title){
        echo $this->name =$title ." ". $this->name;
    }

}

class Human extends Animal{
    public function greet(){
        $this->addTitle("Mr.");
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
echo $morad->greet();


$cat = new cat("Tom");
$cat->eat();
$cat->run();
$cat->greet();
$cat->sleep();

?>