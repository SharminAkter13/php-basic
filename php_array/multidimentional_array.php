<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimentional Array</title>
</head>
<body>
    <h4>Multidimentional Array</h4>
    <?php
    $brand = array(
        array("Gucchi","Doir","Celine"),
        array("Tiffini","Cartier","LV"),
        array("YSL","Bulgari","Chopard")
    );
    echo $brand [1][1];
    echo "<br>";
    echo $brand[2][2];
    echo "<br>";
    echo $brand[0][0];
    echo "<br>";

    print_r($brand);
    echo "<br>";

    for($i=0;$i<3;$i++){
        echo "$i";
        for($j=0;$j<3;$j++){
             echo "$j";
        }
        echo "<br>\n";
    }


    $text_num = array(
        array(
            array(1,2,3,4),
            array("A","B","C","D"),
        ),
        array(
            array(11,22,33,44),
            array("Aa","Bb","Cc","Dd"),
        ),
        array(
            array(111,222,333,444),
            array("AaA","BbB","CcC","DdD"),
        ),
    );
    echo "<pre>";
    print_r($text_num);
    echo "<pre>";
    ?>

   <h3>Traversing Indexed 2D Array</h3>
   <?php
   $tbls =[
    [1,2,3,4,5],
    [11,22,33,44,55],
    [111,222,333,444,555],
    [1111,2222,3333,4444,5555],
    [11111,22222,33333,44444,55555],
   ];
   echo "\n"; //prints a newline character
   foreach($tbls as $row){
    foreach($row as $clm){
        $v = sprintf("%9d",$clm);
        echo $v;
    
    }
    echo "\n";
   }
   ?>

</body>
</html>