<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrow Function</title>
</head>
<body>
    <h3>Anonymous Function</h3>

    <?php
    $sum = function($s,$t){
        return $s + $t;
    };
    echo $sum(3,9);

    echo "<br>";
    
    ?>

<h3>Arrow Function</h3>


    <?php
    $sums = fn() => "Hello";  //in arrow function in php we need to call fn otherwise it won't work.
    echo $sums();
    
    ?>
</body>
</html>