<?php
require_once("form_details.php");
    if(isset($_POST['submit'])){
        $fname= $_POST['name'];
        $fid= $_POST['id'];
        $email= $_POST['email'];
        $pattern ="/^[a-zA-Z0-9_%#\-\.]+[@][a-z]+[\.][a-z]{2,3}$/i";

        
        if (preg_match($pattern,$email)) {
            echo "<p> The Email is Valid</p>";
        } else{
            echo "<p>  The Email is Invalid</p>";
        }
        $details = new FormDetails($fname,$fid,$email);
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
            border-radius: 2px;
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
            Email:
            <input type="text" name="email" id="email" placeholder="Please Enter email"><br><br>
            <input type="submit" name="submit" value="Submit" style="background-color: rgb(154, 130, 241);font-weight:bold;color:aliceblue;">
        </form>
        
    </div>
    <?php
    ?>
</body>
</html>