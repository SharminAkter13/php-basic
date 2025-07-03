<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Point </title>
</head>
<body>
    <form method="post">
        Enter Grade  Value:
        <input type="text" name="result" id="result" required><br><br>
        <input type="submit" name="submit" value="Submit"><br><br>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $result= $_POST['result'];
        $resultUpper =strtoupper($result);
        $grade =("");
       
        if( $resultUpper=="A+"){
            $grade = "Outstanding";
        }elseif( $resultUpper=="A"){
            $grade = "Very Good";
        }elseif( $resultUpper=="B"){
            $grade = "Good";
        }elseif( $resultUpper=="C"){
            $grade = "Poor";
        }else{
            $grade = "Fail";
        }
        
        echo "The Grade Value is : $grade";
    }
    ?>
</body>
</html>