<?php
// Interfaces allow you to specify what methods a class should implement.

// Interfaces cannot have properties
// All interface methods must be public
// All methods in an interface are abstract
// Classes can implement an interface while inheriting from another class at the same time

interface Course {
    public function getWdpf();
    public function details();
    public function view();
}

class CourseDetails implements Course{

    public function getWdpf(){
        echo "Trainee details collected and display";
    }
    public function details(){
        echo "Trainee Sheet completed and updated";
    }

    public function view(){
        echo "Trainee Sheet completed and updated";
    }
}
$D = new CourseDetails(); // Creates an instance of CourseDetails
echo $D->getWdpf();     // Calls getWdpf() and echoes its output
echo "<br>";            // Echoes a <br> tag for a line break
echo "<br>";            // Echoes another <br> tag
echo $D->details();
echo "<br>";            // Echoes a <br> tag for a line break
echo "<br>";          // Calls view() and echoes its output
echo $D->view();        // Calls view() and echoes its output

?>