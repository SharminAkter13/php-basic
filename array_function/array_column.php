<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array colunm</title>
</head>
<body>
    <h3></h3>
    <!-- Return the values from a single column in the input array -->
    <?php
    // array array_column( array $input , mixed $column_key [, mixed $index_key = NULL ] )
    $records = array(
    array(
        'id' => 2135,
        'first_name' => 'Zara',
        'last_name' => 'Ali',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Nuha',
        'last_name' => 'Mac',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Shifa',
        'last_name' => 'Alam',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Riya',
        'last_name' => 'Sweet',
    )
  );

 $first_names = array_column($records, 'first_name');
 print_r($first_names);

    ?>
</body>
</html>