<?php
// abstract class
abstract class ourClass{
   final function doSomething(){
        echo "Doing Somethimg\n";
    }
}
class myClass extends ourClass{
    
    // function doSomething(){
    //     parent:: doSomething();
    //     echo "Doing Nothing\n";
    // }
}
$me = new myClass();
$me->doSomething();

?>