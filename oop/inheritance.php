<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inheritance</title>
</head>
<body>
    <h3>inheritance</h3>
    <?php
    class Greet{
        public $name;

        function __destruct()
        {
            echo "Bye";
        }

        function display(){
            echo "New York is a big city"."<br>";
        }

        function details(){
            echo "This is details method "."<br>";
        }

        function __construct($name)
        {
            echo "this is <br>".$this->name=$name;
        }
    }

    class Greetings extends Greet {
        public $address;
        public $contact;

        function getInfo(){
            echo "The city of Youth ";
        }

        public function __construct($name,$address)
        {
            echo $this->name=$name;
         echo "I lives in ".$this->address = $address;
        }
    }



    class Study extends Greetings{
        public $age;
        function view(){
            echo " Showing  user information ";
        }
        function __construct()
        {
            echo " Showing  user creditability   ";
        }
    }

    
    // $G =new Greetings("Sharmin Akter ","New York ");
    $G= new Study();
    $G->getInfo();
    $G->display();
    ?>
</body>
</html>