
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phon No.</title>
    <style>
        div{
            width: 300px;
            height: 100px;
            margin: 50px auto;
            border: 2px solid black;
            border-radius: 3px;
            padding: 15px;
        }
    </style>
</head>
<body>
     <h3 style="text-align: center; font-size: 16pt;">Validation</h3>
    <div>
       
    <form method="post">
        Contact:
        <input type="text" name="con" ><br><br>
        Email:
        <input type="text" name="email" ><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $con = $_POST['con'];
        $email = $_POST['email'];
        $phone_pattern ="/^[0-9+]{11,14}$/";
        $email_pattern ="/^[a-zA-Z0-9#%_\-\.]+[@][a-z]+[\.][a-z]{2,3}$/";
        echo "<br>";

        // if(preg_match($phone_pattern,$con)){
        //     echo "Phone Number is Valid";
        // }else{
        //     echo "Phone Number is Invalid";

        // }

        // echo "<br>";
        // echo "<br>";

        // if(preg_match($email_pattern,$email)){
        //     echo "Email is Valid";
        // }else{
        //     echo "Email is Invalid";

        // }


        if (preg_match($phone_pattern, $con) && preg_match($email_pattern, $email)) {
            echo "<b style='color: green;font-size: 16pt; margin:auto;'>Both Phone Number and Email are Valid</b>";
        } elseif (!preg_match($phone_pattern, $con) && !preg_match($email_pattern, $email)) {
            echo "<b style='color: red;font-size: 16pt; margin:auto;'>Both Phone Number and Email are Invalid</b>";
        } elseif (!preg_match($phone_pattern, $con)) {
            echo "<b style='color: red;font-size: 16pt; margin:auto;'>Phone Number is Invalid</b>";
        } elseif (!preg_match($email_pattern, $email)) {
            echo "<b style='color: red;font-size: 16pt;margin:auto;'>Email is Invalid</b>";
        }

    }
    ?>
</body>
</html>