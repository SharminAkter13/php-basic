<?php
class FormDetails{
    private $fid;
    private $name;

    public static $file_path ="data_store.txt";

  function __construct($_name,$_id){
      $this->name=$_name;
      $this->fid=$_id;
  }

  public function data_store(){
    return $this->name.",".$this->fid.PHP_EOL; //End of Line or create new line
  }

  public function store(){
    file_put_contents(self::$file_path,$this->data_store(),FILE_APPEND);
  }  
  
  
}
?>