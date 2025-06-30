<?php
echo "<h3>protected - the property or method can be accessed within the class and by classes derived (extended) from that class</h3>";
class Bird{
    protected $name;
    public function setName($name){
        $this->name= $name;
    }
//    private function details(){
//         return "This is parent protected method";
//     }
    protected function details(){
        return "This is parent protected method"; //only can use if class is extended
    }
    public function details2(){
        return $this->details();
    }
    
}

// Accessible within the class itself and by subclasses (child classes), but not from outside the class.
    class Bird2 extends Bird{
        public function getName(){
            return "This is $this->name";
        }
    }


$birds = new Bird2();
$birds->setName("Jungle Birds");
echo $birds->getName();
echo "<br>";
echo $birds->details2();

?>