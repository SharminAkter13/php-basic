<?php
    // Syntax

//  try{
//     throw new Exception("Here Goes Error Message");
//  }catch(Exception $e){
//     echo $e-> getMessage();
//  }


 $x =15;

 try{
    if($x<20){

  
    throw new Exception("It's Valid");
 }else{
    throw new Exception("It's Invalid");
 }
 }catch(Exception $e){
        echo "Your error is: " .$e-> getMessage()."<br><br>";
 }finally{
    echo "The Error is Finally Solve";
 }

?>