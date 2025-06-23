<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerics Functions</title>
</head>
<body>
    <h1>Numerics Functions</h1>
    <?php
    // numeric[is_numeric(),round(),rand(min,max);]


    // checks if a variable or value is a number or a numeric string. if true than return 1; if false than return empty
    function n(){
        echo is_numeric(32);
    }
    n();
    echo "<br>";

    // rounds a floating-point number to the nearest integer or to a specified number of decimal places.
    function n1(){
        echo ("Round:".round(456.62));
    }
    n1();
    echo "<br>";
    
    // The rand() is an inbuilt function in PHP used to generate a random number ie., it can generate a random integer value in the range [min, max].
    function n2(){
        echo ("Random Number:".rand(44578,47212));
    }
    n2();
    echo "<br>";
    ?>

    <h1>range function</h1>
    <!-- array range(low, high, step) -->
    <?php
    $N =range(0,8);
    var_dump($N);
    echo "<br>";
    echo "<br>";

    foreach ($N as $M){
        echo ("$M" .",");
    }
    ?>

<?php
    $S =range(0,38,3); //step respectively so it returns an array with 
    // elements starting from 0 to 38 incremented by 3
   
    echo "<br>";
    echo "<br>";

    foreach ($S as $T){
        echo ("$T" .",");
    }
    ?>
</body>
</html>