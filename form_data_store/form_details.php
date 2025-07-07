<?php
class FormDetails{
    private $fid;
    private $fname;
    private $email;

    public static $file_location ="data_store.txt";

  function __construct($_name,$_id,$_email){
      $this->fname=$_name;
      $this->fid=$_id;
      $this->email=$_email;
  }

  public function data_store(){ //child function
    return $this->fname.",".$this->fid.",".$this->email.PHP_EOL; //End of Line or create new line
  }

  public function dstore(){
    file_put_contents(self::$file_location,$this->data_store(),FILE_APPEND);
  }  
  
  
}
?>