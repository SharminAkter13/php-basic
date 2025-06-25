<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidimentional array</title>
</head>
<body>
    <?php
     $brand = array(
        array("Gucchi","Doir","Celine"),
        array("Tiffini","Cartier","LV"),
        array("YSL","Bulgari","Chopard")
    );
    for($r=0;$r<3;$r++){
        echo "<p><b>Brand No.$r</b></p>";
        echo"<ul>";
        for($c=0;$c<3;$c++){
            echo "<li>".$brand[$r][$c]."</li>";
        };
        echo"</ul>";
    }
    ?>
</body>
</html>