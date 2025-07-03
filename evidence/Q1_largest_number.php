<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number </title>
</head>
<body>
    <form method="post">
        Number X :
        <input type="number" name="numX" id="numX" required><br><br>
        Number Y :
        <input type="number" name="numY" id="numY" required><br><br>
        Number Z :
        <input type="number" name="numZ" id="numZ" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $x = $_POST['numX'];
        $y = $_POST['numY'];
        $z = $_POST['numZ'];
        echo "<h3>Result :</h3>";
        echo "<br>";
        echo "<h3>You have enter X: $x, Y: $y, Z: $z";
        echo "<br>";
        echo "<br>";


        if(($x>$y) && ($x>$z)){
            echo "The Largest Number is X: $x";
        } elseif(($y>$x) && ($y>$z)){
            echo "The Largest Number is Y: $y";
        } else{
            echo "The Largest Number is Z: $z";
        }
    }
    ?>
</body>
</html>