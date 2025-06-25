<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array shift Function</title>
</head>
<body>
    <!-- Removes the first element from an array, and returns the value of the removed element -->
<h3>Array shift Function</h3>
    <?php
    $input = array("a"=>"banana","b"=>"apple","c"=>"orange");
    array_shift($input);
    print_r($input);
    ?>
</body>
</html>