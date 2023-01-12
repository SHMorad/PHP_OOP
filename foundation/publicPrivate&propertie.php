<?php
// private public & proprtie
class Fund{
    // public $fund;
    private $fund;

    public function __construct($initialFund=0){
        $this->fund=$initialFund;
    }
    public function addFund($money){
        $this->fund += $money;
    }
    public function deductFund($money){
        $this->fund -= $money;
    }

    public function getTotal(){
        echo "Total Fund {$this->fund}\n";
    }
}

$ourFund = new Fund(100);
// $ourFund->fund =75;
$ourFund->getTotal();
$ourFund->addFund(10);
$ourFund->deductFund(7);
$ourFund->getTotal();




?>