<?php
require_once("form_details.php");
    if(isset($_POST['submit'])){
        $fname= $_POST['name'];
        $fid= $_POST['id'];
        $email= $_POST['email'];
        $pattern ="/^[a-zA-Z0-9_%#\-\.]+[@][a-z]+[\.][a-z]{2,3}$/i";

        
        if (preg_match($pattern,$email)) {
            echo "<h3> The Email is Valid</h3>";
        } else{
            echo "<h3>  The Email is Invalid</h3>";
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
</head>
<body>
    <div>
        <form method="post" style="margin: auto;">
            Name:
            <input type="text" name="name" placeholder="Please Enter Name"><br><br>
            ID:
            <input type="text" name="id" placeholder="Please Enter id"><br><br>
            Email:
            <input type="text" name="email" id="email"><br><br>
            <input type="submit" name="submit" value="Submit" style="background-color: powderblue;font-weight:bold;">
        </form>
        
    </div>
    <?php
    ?>
</body>
</html>