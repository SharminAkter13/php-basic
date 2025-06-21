<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data type - objects</title>
</head>
<body>
    <h1>data type - objects</h1>
        <?php

        class Employee{
            public $name;
            public $salary;
            // The public keyword is an access modifier. It marks a property or method as public.
            
            public function __construct($name,$salary){
                $this->name = $name;
                $this->salary = $salary;
            }
        }

        $obj =new Employee("Abdullah", 50000);
        var_dump($obj)
            ?>

</body>
</html>