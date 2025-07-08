
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phon No.</title>
</head>
<body>
    <form method="post">
        Contact:
        <input type="text" name="con" ><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $con = $_POST['con'];
        $pattern ="/^[0-9+]{11,14}$/";

        echo "<br>";

        if(preg_match($pattern,$con)){
            echo "Phone Number is Valid";
        }else{
            echo "Phone Number is Invalid";

        }
    }
    ?>
</body>
</html>