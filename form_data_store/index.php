<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Vlidation</title>
</head>
<body>
    <form method="post" style="margin: auto;">
        Name:
        <input type="text" name="name" placeholder="Please Enter Name"><br><br>
        ID:
        <input type="text" name="id" placeholder="Please Enter id"><br><br>
        <input type="submit" name="submit" value="Submit" style="background-color: powderblue;font-weight:bold;">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $fname= $_POST['name'];
        $fid= $_POST['id'];
       
        $details = new FormDetails($_name,$_id);
        $details->data_store();

       
    }
    ?>
</body>
</html>