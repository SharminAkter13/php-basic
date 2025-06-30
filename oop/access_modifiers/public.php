<?php
echo "<h3>public - the property or method can be accessed from everywhere. This is default</h3>";

class Fruit {
    public $name="Mango";
    function fruitname(){
        return "Fruits Name : ".$this->name;
    }

  }
  
  $mango = new Fruit();
  echo $mango->fruitname(); 
 
?>