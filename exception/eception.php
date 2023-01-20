<?php
// Custom
/* class Student{
    public function __construct($name, $age){
        $this->name = $name;
        
        if($age<4){
            throw new Exception ("Too Young",101);
        }elseif($age>35){
            throw new Exception ("Too old",102);
        }else{
            echo $age;
        }
        $this->age = $age;
    }
    
}


try {
    $s = new Student("morad", 3);
    
} catch (Exception $e) {
    echo $e->getCode().":".$e->getMessage();
} */

// custom Exception
/* 
class MyException extends Exception{}
class NetworkException extends Exception{}

function testException(){
    throw new NetWorkException();
}
try {
    testException();
} catch (MyException $e) {
    echo "My Exception Caught";
}
 catch (NetworkException $e) {
    echo "Network Exception Caught";
}
 catch (Exception $e) {
    echo "Exception Caught";
}finally{
    echo "\n Clean Up";
} */





?>