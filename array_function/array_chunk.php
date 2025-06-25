<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array chunk</title>
</head>
<body>
    <h3>array chunk</h3>
    <!-- Split an array into parts or chunks of a given size. -->
     <?php
    //  syntax = array array_chunk( $array, $size, $preserve_keys )
        $input_array = array('a', 'b', 'c', 'd', 'e');

        print_r(array_chunk($input_array, 2, true));
     ?>
</body>
</html>