<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset() function</title>
</head>
<body>
    <h2> isset() function check if a variable is set and is not null</h2>
    <?php
    // it will execute if variable is true;
    // $num =null;
    $num =65;
    if(isset($num)){
        $r = $num+6;
        var_dump($r);
    }else{
        var_dump("False");
    }
    ?>
    <h3>! (not  operator)</h3>
<?php
    // it will execute if variable is false because of not operator(!);
    // $num =null;
    $num =5;
    if(!isset($num)){
        $r = $num+6;
        var_dump($r);
    }else{
        var_dump("False");
    }
    ?>
</body>
</html>