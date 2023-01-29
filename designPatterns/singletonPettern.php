<?php
// singleton patterns

/* class SomeClass{
    static $instance;
    private $name;
    function __construct($name){
        $this->name = $name;
        echo "New Instance Created\n";
    }
    static function getInstance($name=null){
        if(!self::$instance){
            if($name){
                self::$instance = new SomeClass($name);
            }else{
                self::$instance = new SomeClass("");
            }

        }else{
            echo "old instance suplied\n";
        }
        return self::$instance;  
    }
    function sayName(){
        echo $this->name."\n";
    }
}

$sc1 =SomeClass::getInstance("morad");
$sc2 = SomeClass::getInstance("pateary");
$sc3 = SomeClass::getInstance();

$sc1->sayName();
$sc2->sayName();
$sc3->sayName(); */

// Another Example singleton

/* class FileWriter{
    static $instances=[];
    private $filename;
    function __construct(){
        $this->filename=$filename;
    }
    static function getInstance($filename){
        if(!isset(self::$instances[$filename])){
            self::$instances[$filename];
        }
        return self::$instances[$filename];
    }
    function writeData($data){
        echo "write Data To{$this->filename}\n";
    }
    static function dump(){
        print_r(self::$instances);
    }
}
$fw1=FileWriter::getInstance("/tmp/abcd.txt");
$fw2=FileWriter::getInstance("/tmp/abc.txt");
$fw3=FileWriter::getInstance("/tmp/abcd.txt");
$fw4=FileWriter::getInstance("/tmp/ab.txt");

$fw1->writeData("Some Data");
$fw2->writeData("Some Data");
$fw3->writeData("Some Data");
FileWriter::dump();
 */

?>