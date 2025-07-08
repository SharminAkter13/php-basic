<?php
require_once('trainee_details.php');


    if(isset($_POST['submit'])){
        $name =$_POST['name'];
        $id =$_POST['id'];

       $trainee = new TraineeDetails($name,$id);
       $trainee->dstore();
       echo "Trainee Form Submit Successfully";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <div>
        <form action="#" method="post">
        <fieldset>
            <legend>TRAINEE FORM</legend>
            Name:
            <input type="text" name="name" placeholder="enter name"><br><br>
            ID:
            <input type="text" name="id" placeholder="enter id"><br><br>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    
        </form>
    </div>
</body>
</html>