<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array count values</title>
</head>
<body>
    <h3></h3>
    <!-- Count all the values inside an array. -->

<?php
    // array array_count_values( $array )

        function Counting($array){
            return(array_count_values($array));
        }
        $array = array("Geeks", "for", "Geeks", "Geeks", "Welcome", "for");
        print_r(Counting($array));

        ?>
</body>
</html>