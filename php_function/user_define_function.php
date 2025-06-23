<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user define function</title>
</head>
<body>
    <?php
    function sum($p,$q){
        $r =$p+$q;
        return $r;
    }
    echo sum(45,6);
    
    ?>



<?php
    function Course($cname,$cduration){
        echo "IDB IT Scholarship Programme $cname course is $cduration Months long.";
    }
    Course('WDPF',8.5 );
    
    ?>
</body>
</html>