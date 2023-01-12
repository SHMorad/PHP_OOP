<?php
/* class DistrictCollection implements IteratorAggregate{
    private $districts;
    function __construct(){
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts, $district);
    }
    function getDistricts(){
        return $this->districts;
    }
    function getIterator(){
        return new ArrayIterator($this->districts);
    }
}

$districts = new DistrictCollection;
$districts->add("chandpur");
$districts->add("cummila");
$districts->add("rajsahi");
$districts->add("khulna");
$districts->add("barisal");
foreach ($districts as $district) {
    echo $district."\n";
} */


// for Count

class DistrictCollection implements IteratorAggregate,Countable{
    private $districts;
    function __construct(){
        $this->districts = array();
    }

    function add($district){
        array_push($this->districts, $district);
    }
    function getDistricts(){
        return $this->districts;
    }
    function getIterator(){
        return new ArrayIterator($this->districts);
    }
    function count(){
        return count($this->districts);
    }
}

$districts = new DistrictCollection;
$districts->add("chandpur");
$districts->add("cummila");
$districts->add("rajsahi");
$districts->add("khulna");
$districts->add("barisal");
$districts->add("chitagong");
$districts->add("bagherHat");
echo count($districts);

?>