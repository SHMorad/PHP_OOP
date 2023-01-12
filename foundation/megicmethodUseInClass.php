<?php
/* class Student{
    private $name;
    private $age;
    private $class;
    function getName(){
        return $this->name;
    }
    function setName($name){
        $this->name = $name;
    }
    function getAge(){
        return $this->age;
    }
    function setAge($age){
        $this->age = $age;
    }
    function getClass(){
        return $this->class;
    }
    function setClass(){
        $this->class = $class;
    }
}

// $m = new Student("morad", "22", '10');
$m = new Student();
$m->setName("sahadat\n");
$m->setAge("12");
echo $m->getName();
echo $m->getAge(); */
class Student{
    private $name;
    private $age;
    private $class;
    public function __get($prop){
        return $this->$prop;
    }
    public function __set($prop, $value){
        $this->prop = strtoupper($value);
    }
}
$R = new Student();
echo $R->name="Morad\n";
echo $R->age="12\n";
echo $R->class="10\n";

?>