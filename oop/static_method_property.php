<?php
class Student{
    public static $reg =125546;

    public function studentValue(){
        return self::$reg;
    }

    public static  function view(){
      return "This page Show Static Method";
}

public static function ssValue(){
    return self::view();
}
}

class StudentDetails extends Student{
    public function sdValue(){
        return parent::$reg;
    }
    private function view2(){
        return "This page Show Static Method of child class";
  }
  
  public function sdValue2(){
      return self::view2();
  }
  
}


$details = new StudentDetails();
echo $details->sdValue();
echo "<br>";
// echo Student::studentValue(); //it will show error cause the function is not static
echo StudentDetails::ssValue();

?>