<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_diff_uassoc</title>
</head>
<body>
    <h3>array_diff_uassoc</h3>
    <!-- Compare the keys and values of the user-defined function -->

    <?php
    // array_diff_uassoc($array1, $array2, $array3, ..., $arrayn, user_function)

    function user_function($a,$b){
        if($a===$b){
            return 0;
        }
        return ($a>$b)?1:-+1;
    }
    $a1 = array(10=>"dhaka",20=>"khulna",30=>"sylhet");
    $a2 = array(20=>"dhaka",10=>"khulna",30=>"sylhet");

    $result = array_diff_uassoc($a1,$a2, "user_function");
    print_r($result);
    ?>
</body>
</html>