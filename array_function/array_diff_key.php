<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> array_diff_key() Function</title>
</head>
<body>
    <h3> array_diff_key() Function</h3>
<!-- Get the difference between one or more arrays.  -->

    <?php
    // array array_diff_key($array1, $array2, $array3, ..., $array_n)

    $array1 = array("10"=>"ALI", "20"=>"AMAN", "30"=>"ASHA",
    "40"=>"KHAN", "50"=>"RAISA");
    $array2 = array("10"=>"ALI", "70"=>"AMAN", "30"=>"KHAN",
                    "80"=>"RAHMAN");
    $array3 = array("20"=>"AMAN", "80"=>"RAHMAN");

    print_r(array_diff_key($array1, $array2, $array3));

    ?>
</body>
</html>