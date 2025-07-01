<?php


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