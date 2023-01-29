<?php
// defendency injection or invesion ob control

// ioc = inversion of control

/* 
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
$sm->introduceStudent($ist); */


interface BaseStorage{
    function setFile();
    function writeData();
    function setMode();
}
class storage implements BaseStorage{
    private $fn;
    private $mode;
    function __construct($fn, $mode =null){
        $this->setFileName($fn);
        $this->mode = $mode;
    }
    function setFileName($fn){
        $this->fn = $fn;
    }
    function writeData($data){
        file_put_contents($this->fn =$fn, $data, $this->mode);
    }
    function setMode(){
        $this->mode = $mode;
    }
}

class DataManager{
    function saveData(BaseStorage $storage, $data){
        $storage->writeData($data);
    }
}

$file = new storage("/tmp/abcd.txt");
$file->setMode(FILE_APPEND);
$file->setMode(null);
$dm = new DataManager();
$dm->saveData($file, "Morad patwary");
?>