<?php
require_once('student.php');


if(isset($_POST['submit'])){
    $id =$_POST['id'];
    $name =$_POST['name'];
    $batch =$_POST['batch'];

   $student = new Student($id,$name,$batch);
   $student->dstore();
   echo "<h3>Student Details Shown</h3>";
   
}else{
    echo "Student Data not found";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Result</title>
    <style>
        div{
            width: 300px;
            height: 180px;
            margin: 40px auto;
            border: 2px solid black;
            padding: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2> Student Result</h2>
<div>
<form method="post">
    Student ID:
    <input type="text" name="id" ><br><br>
    Student Name:
    <input type="text" name="name" ><br><br>
    Student Batch:
    <input type="text" name="batch" ><br><br>
    <input type="submit" value="Submit">
</form>
</div>
<?php
Student::result();
?>
</body>
</html>