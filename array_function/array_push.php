<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Push Function</title>
</head>
<body>
    <!-- Inserts one or more elements to the end of an array -->
<h3>Array Push Function</h3>
    <?php
    $input = array("a"=>"banana","b"=>"apple","c"=>"orange");
    array_push($input,"fig");
    print_r($input);
    ?>
</body>
</html>