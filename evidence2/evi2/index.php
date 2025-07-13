<?php
require_once("student.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $id_pattern ="/^[0-9]{2,5}$/";
    $email_pattern ="/^[a-zA-Z0-9#_\-\.]+[@][a-z]+[\.][a-z]{2,3}$/";
    
    if((preg_match($id_pattern,$id)) && (preg_match($email_pattern,$email))){
        echo "<h4 style='text-align:center;font-weight: bold;color:green;'>Both Id & Email is Valid</h4>";
    } elseif((!preg_match($id_pattern,$id)) && (!preg_match($email_pattern,$email))){
        echo "<h4 style='text-align:center;font-weight: bold;color:red;'>Both Id & Email is Invalid</h4>";
    }elseif(!preg_match($id_pattern,$id)) {
        echo "<h4 style='text-align:center;font-weight: bold;color:red;'> Id is Invalid</h4>";
    }elseif(!preg_match($email_pattern,$email)) {
        echo " <h4 style='text-align:center;font-weight: bold;color:red;'>Email is Invalid</h4>";
    }

    echo "<br>";

    $details = new Student($name,$id,$email);
        $details->dstore();
        echo "<h4 style='text-align:center;font-weight: bold;color:green;'>Form Submit Successful</h4>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP FORM</title>

    <style>
        body{
            font-family: serif;
          
        }
        fieldset{
            border-radius: 5px;
            
        }
        legend{
            text-align: center;
            font-weight: bold;
        }
        .main{
            width: 100%;
            float: left;
            padding: 20px;
        }
        .sub1{
            width:40%;
            float: left;
            margin: 70px auto;
            padding: 20px;
            border: 2px solid black;
            border-radius: 5px;
            background-color: #a2d8eeff;

        }
         .sub2{
            width: 50%;
            float: left;
            margin:  auto;
            padding: 20px;
        }
        input[type='text'],input[type='number'],input[type='email']{
            width: 97%;
            padding: 8px 10px;
            border: 1px solid black;
            border-radius: 2px;
        }
         input[type='submit']{
            width: 100%;
            padding: 8px 10px;
            border: 1px solid black;
            border-radius: 2px;
            background-color: #66c1e6ff;;
            font-weight: bold;

         }
    </style>
</head>
<body>
    <div class="main">
        <div class="sub1">
        <form method="post">
            <fieldset>
                <legend>STUDENT FORM</legend>
                Student Name: 
                <input type="text" name="name" placeholder="Enter Name"><br><br>
                 Student ID: 
                <input type="number" name="id" placeholder="Enter Name"><br><br>
                 Student Email: 
                <input type="email" name="email" placeholder="Enter Name"><br><br>
                <input type="submit" name="submit" value="Submit">
            </fieldset>

        </form>
        </div>
        <div class="sub2">
        <?php
        Student::result();
        ?>
        </div>
    </div>
</body>
</html>