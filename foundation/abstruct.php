<?php
/* abstract class Shap{
    abstract function getArea();
    abstract function getPeramiter();
}
class Rectangle extends Shap{
    private $base, $height;

    function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;

    }
    public function setBase($base){
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height = $height;
    }
    public function getArea(){
        return $this->base * $this->height;
    }
    function getPeramiter(){

    } 

}


class Triangle extends Shap{
    public function getArea(){
        return $this->base * $this->height;
    }
    function getPeramiter(){

    } 
}
$triangle = new Triangle();
echo $triangle->getArea();

// $shap = new Shap();
 */


/*  abstract class ourClass{
    function sayHi(){
        echo "Hi\n";
    }
abstract function eat($m, $n);
 }

 class myClass extends ourClass{
    function eat($x, $n){
        echo "I am Eating";
    }
 }

 $mc = new myClass();
 $mc->eat(2, 3); */
class Shape{

}

class Shapes{
    private $shapes;
    function __construct(){
        $this->shapes = array();
    }
    function addShape(Shapes $shapes){
        array_push($this->shapes, $shapes);

    }
    function totalShape(){
        return count($this->shapes);
    }
}
class Rectangle extends Shapes{

}

class Triangle extends Shapes{

}

class student{

}
$shapeCollecttion = new Shapes();
$shapeCollecttion->addShape(new Rectangle());
$shapeCollecttion->addShape(new Triangle());
// $shapeCollecttion->addShape(new student());
echo $shapeCollecttion->totalShape();
?>