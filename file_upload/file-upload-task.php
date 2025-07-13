<?php
if(isset($_POST['submit'])){
    $name = $_FILES['file']['name'];
    $add = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
    $img = "images/";
    $support = 1;
    $Kb =$size/1024;

    if($Kb>400){
        echo "File is Too Large!!";
    }elseif($type != "image/jpeg" && $type != "image/jpg" && $type != "image/png" && $type != "image/gif"){
            echo "File Type is not Supported";
            $support = 0;
    }else{
        move_uploaded_file($add, $img.$name);
    echo "<b style='color: green;font-size: 16pt;'>Upload Success!!</b>";
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
        <img src='$img/$name' width='300px' style='margin-top: 30px'>
      </div>";
    }
    
    ?>
    </div>
</body>
</html>