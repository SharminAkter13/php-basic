<?php
class Student{
    private $id;
    private $name;
    private $batch;

    public static $file_location ="data_store.txt";

  function __construct($_name,$_id,$_batch){
      $this->name=$_name;
      $this->id=$_id;
      $this->batch=$_batch;
  }

  public function data_store(){ //child function
    return $this->name.",".$this->id.",".$this->batch.PHP_EOL; //End of Line or create new line
  }

  public function dstore(){
    file_put_contents(self::$file_location,$this->data_store(),FILE_APPEND);
  }  
  
  public static function result(){
        $student = file(self::$file_location);

        echo "<b>NAME | ID | BATCH </b><br>";
        foreach($student as $students){
            list($name,$id,$batch)=explode(",",trim($students));
            echo "$name | $id | $batch <br>";
        }
    }

  
}
?>