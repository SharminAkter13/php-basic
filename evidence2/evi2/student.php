<?php
class Student{
    private $name;
    private $id;
    private $email;
   
    public static $file_location = "data_store.txt";

    function __construct($_name,$_id,$_email) {
        $this->name = $_name;
        $this->id = $_id;
        $this->email = $_email;
    }

    public function data_store(){
        return $this->name.",".$this->id.",".$this->email.PHP_EOL;
    }

    function dstore(){
        file_put_contents(self::$file_location,$this->data_store(),FILE_APPEND);
    }

    public static function result(){

        $student =file(self::$file_location);

         echo "<h2 style='text-align:center;'>student List</h2>";
            echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; margin: 20px auto; width:100%;'>";
            echo "<tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>EMAIL</th>
                  </tr>";
            
            foreach ($student as $students) { 
                list($id,$name,$email) = explode(",", trim($students));

                echo "<tr>
                        <td>$name</td>
                        <td>$id</td>
                        <td>$email</td>
                       
                      </tr>";
            }
    }
}
?>