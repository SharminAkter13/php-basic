<?php
require_once("student.php");
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $id= $_POST['id'];
        $batch= $_POST['batch'];

        $details = new Student($name,$id,$batch);
        $details->dstore();
        echo "Form Submit Successful";
       
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Form </title>
    <style>
        div{
            background-color:rgb(186, 171, 243);
            color: black;
            margin: 30px auto;
            padding: 10px;
            width: 300px;
            height: 200px;
            border: 2px solid rgb(159, 137, 247);
            border-radius: 5px;
        }

        input[type='text'],input[type='submit']{
            width: 99%;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <div>
        <form method="post" >
            Name:
            <input type="text" name="name" placeholder="Please Enter Name"><br><br>
            ID:
            <input type="text" name="id" placeholder="Please Enter id"><br><br>
            Batch:
            <input type="text" name="batch" id="batch" placeholder="Please Enter batch"><br><br>
            <input type="submit" name="submit" value="Submit" style="background-color: rgb(154, 130, 241);font-weight:bold;color:aliceblue;">
        </form>
        
    </div>
    <?php
    Student::result();
    ?>
</body>
</html>