<?php
/*
The instanceof keyword is used to check if an object belongs to a class. The comparison returns true if the object is an instance of the class, it returns false if it is not.
*/
class Group {
    public $gname ="BBA";
}

class Student {
    public $name ="Ali Akbar";
}

$x = new Group();
$y = new Student();

var_dump($y instanceof Group);
var_dump($x instanceof Group);
?>