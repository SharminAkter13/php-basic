<?php
class Bird{
    protected $name;
    public function setName($name){
        $this->name= $name;
    }
}
    class Bird2 extends Bird{
        public function getName(){
            return "This is $this->name";
        }
    }


$birds = new Bird2();
$birds->setName("Jungle Birds");
echo $birds->getName();
?>