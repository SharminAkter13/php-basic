<?php

if(isset($_POST['submit'])){
    $file_add = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    $img = 'images/';

    // copy($tem_add, "images/".$file_name);
    if(!empty($file_name)){
        move_uploaded_file($file_add,$img.$file_name);
    }else{
        echo "Please Select a File";
    }

   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style=" width:500px; margin:10px auto">
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
            <input type="file" name="file" ><br><br>
            <input type="submit" name="submit" >        
            
        </fieldset>
    </form>
    <?php
    if(isset($_POST['submit'])){

        echo "<div style='text-align:center;margin: auto'>
        <img src='$img/$file_name' width='300px' style='margin-top: 30px'>
      </div>";

      echo "<b>File Name:</b> ".$_FILES['file']['name']."<br>";
      echo "<b>Tmp Name:</b> ".$_FILES['file']['tmp_name']."<br>";
      echo "<b>File Size:</b> ".$_FILES['file']['size']."<br>";
      echo "<b>File Type:</b> ".$_FILES['file']['type']."<br>";
      echo "<b>File Error:</b> ".$_FILES['file']['error']."<br>";
    }

    ?>
    </div>
</body>
</html>