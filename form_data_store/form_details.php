<?php
class FormDetails{
    private $fid;
    private $fname;

    public static $file_path ="data_store.txt";

  function __construct($_name,$_id){
      $this->fname=$_name;
      $this->fid=$_id;
  }

  public function data_store(){ //child function
    return $this->fname.",".$this->fid.PHP_EOL; //End of Line or create new line
  }

  public function dstore(){
    file_put_contents(self::$file_path,$this->data_store(),FILE_APPEND);
  }  
  
  
}
?>