<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive Function</title>
</head>
<body>
    <!-- A recursive function is a function that calls itself within its own definition -->
     <h4>Recursive Function</h4>
    <?php
    function fact($n){
        if($n<=8){
            echo"$n <br>";
            fact($n+1);
        }
    }
    fact(3);
    ?>
</body>
</html>