<?php

if(isset($_POST['submit'])){
    $tem_add = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    copy($tem_add, "images/".$file_name);
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
        <img src='images/$file_name' width='300px'>
      </div>";

    }

    ?>
    </div>
</body>
</html>