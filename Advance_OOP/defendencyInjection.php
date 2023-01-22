<?php
// defendency injection or invesion ob control

// ioc = inversion ob control


interface BaseStudent{
    function displayName();
}
class ImporoveStudent implements BaseStudent{
    private $name;
    private $title;
    function __construct($name, $title){
        $this->name = $name;
        $this->title = $title;
    }
    function displayName(){
        echo "Hello i am {$this->title}. {$this->name}\n";
    }
}

class student implements BaseStudent{
    private $name;
    function __construct($name){
        $this->name = $name;
    }
    function displayName(){
        echo "Hello i am ".$this->name."\n";
    }
}

// class studentManager{
//     function introduceStudent($name){
//         $st = new Student($name);
//         $st->displayName();
//     }
// }
class studentManager{
    function introduceStudent(BaseStudent $student){
       $student->displayName();
    }
}

// $sm = new studentManager();
// echo $sm->introduceStudent("morad Patwary");

$st = new student("Morad Patwary");
$ist = new ImporoveStudent("Mehedi miraj", "mr");
$sm= new studentManager();
$sm->introduceStudent($st);
$sm->introduceStudent($ist);

?>