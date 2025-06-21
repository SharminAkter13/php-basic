<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global variables</title>
</head>
<body>
    <h1>global variables</h1>

    <?php

    $x =56;
    $y =5;
    function  sub(){
        global $x, $y, $z;
        $z =$x-$y;
    }
    sub();
    echo $z;
    
    ?>
</body>
</html>