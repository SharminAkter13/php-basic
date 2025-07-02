<?php
echo "<h3>private - the property or method can ONLY be accessed within the class</h3>";

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
echo $total->show();
?>