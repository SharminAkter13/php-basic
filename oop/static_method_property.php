<?php
class Student{
    public static $reg =125546;

    public function studentValue(){
        return self::$reg;
    }

    public function view(){
      return "This page Show Static Method";
}

public function ssValue(){
    return self::view();
}
}
$details = new Student();
echo $details->studentValue();
echo $details->view();

?>