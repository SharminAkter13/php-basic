<?php
class Check{
    public $cash =0;
    function sum($equal){
       $this->cash += $equal;
    }

    public function getCash(){
        return $this->cash;
    }
    private function details(){
        return "This is Private account";
    }
    
    public function show(){
        return $this->details();
    }
}
$total = new Check();
echo $total ->sum(100000);
echo $total ->sum(100000);
echo $total->getCash();
?>