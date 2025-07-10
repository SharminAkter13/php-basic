<?php
    class Student{
        private $id;
        private $name;
        private $batch;

        public static $file_location ="data_store.txt";

        function __construct($_id,$_name,$_batch){
            $this->id = $_id;
            $this->name =$_name;
            $this->batch =$_batch;
        }
       
        public function data_store(){
            return $this->id.",".  $this->name.",".$this->batch.PHP_EOL; 
        }

        function dstore(){
            file_put_contents(self::$file_location,$this->data_store(),FILE_APPEND);
        }


        public static function result(){
            $student =file(self::$file_location);
            echo "<b> ID  | NAME  | BATCH  </b><br>";
      foreach($student as $students){
          list($id,$name,$batch)=explode(",",trim($students));
          echo "  $id  |  $name  | $batch    <br>";
      }
        }
    }
?>