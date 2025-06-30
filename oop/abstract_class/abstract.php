<?php
echo "<h3>Abstract Class</h3>";

// An abstract class is a class that contains at least one abstract method . An abstract method is a method that is declared, but not implemented in the code.

// abstract have properties     
// abstract class method is public or protected     
abstract class Trainee{
    abstract public function getTname();
    public function view(){
        echo "Trainee Sheet";
    }
}

class Course extends Trainee{
    public function getTname(){
        echo "Trainee details collected";
    }

    public function view(){
        echo "Trainee Sheet completed";
    }
}

class Course2 extends Trainee{
    public function getTname(){
        echo "Trainee details collected and display";
    }

    public function view(){
        echo "Trainee Sheet completed and updated";
    }
}

$details = new Course2();
echo $details->getTname();
echo "<br>";
echo "<br>";
echo $details->view();
?>