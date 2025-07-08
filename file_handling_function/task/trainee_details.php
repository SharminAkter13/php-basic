<?php
class TraineeDetails{
        private $name;
        private $id;

        public static $file_location ="data_store.txt";
        function __construct($_name,$_id){
            $this->name= $_name;
            $this->id= $_id;
        }

        public function data_store(){
            return $this->name.",". $this->id.PHP_EOL;
        }
        
        function dstore(){
            file_put_contents(self::$file_location,$this->data_store(),FILE_APPEND);
        }  

        public static function show_traineeList(){
            $trainee =file(self::$file_location);
            echo "<b>  NAME  |   ID  </b><br>";
      foreach($trainee as $trainees){
          list($name,$id)=explode(",",trim($trainees));
          echo "  $name  |   $id  <br>";
      }
        }
}
?>