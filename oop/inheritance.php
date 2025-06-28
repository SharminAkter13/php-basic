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
            echo "This is display method"."<br>";
        }

        function details(){
            echo "This is details method"."<br>";
        }

        function __construct($name)
        {
            echo "this is <br>".$this->name=$name;
        }
    }

    class Greetings extends Greet{
        
    }

    ?>
</body>
</html>