<?php
class Greet{
    public $name;

    function __destruct()
    {
        echo "Bye";
    }

    final function display(){
        echo "New York is a big city"."<br>";
    }

    function details(){
        echo "This is details method "."<br>";
    }

    function __construct($name)
    {
        echo "this is <br>".$this->name=$name;
    }
}

class Greetings extends Greet {
    public $address;
    public $contact;

    // function display(){ //cannot override final method
    //     echo "New York is a big city with so much to explore"."<br>";
    // }

    function getInfo(){
        echo "The city of Youth ";
    }

    public function __construct($name,$address)
    {
        echo $this->name=$name;
     echo "I lives in ".$this->address = $address;
    }
}

    $G= new Greetings("Sharmin Akter ","New York City");
    $G->getInfo();
    $G->display();
    ?>