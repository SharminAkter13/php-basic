<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array count values</title>
</head>
<body>
    <h3></h3>
    <!-- Gets the difference between one or more arrays (including keys). -->

<?php
    // array_diff_assoc($array1, $array2, $array3, ..., $arrayn)

    $array1 = array("10"=>"ALI", "20"=>"AMAN", "30"=>"ASHA",
    "40"=>"KHAN", "50"=>"RAISA");
$array2 = array("10"=>"ALI", "70"=>"AMAN", "30"=>"KHAN",
                    "80"=>"RAHMAN");
$array3 = array("20"=>"AMAN", "80"=>"RAHMAN");

print_r(array_diff_assoc($array1, $array2, $array3));

        ?>
</body>
</html>