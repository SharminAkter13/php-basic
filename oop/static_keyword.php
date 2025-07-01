<?php
echo "<h3>Static Keyword </h3>";

// Static properties and methods can be used without creating an instance of the class.
class Trainee{
    const name ="Welcome to IDB!!! "."<br>";

    public static function traineeList(){
        echo "This Page Contain Treainee List";
    }
}

echo Trainee::traineeList();
echo Trainee ::name;
// echo Trainee ::$name="Hi";
?>