<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trait</title>
</head>
<body>
    <?php
    trait A{
        public function sayHello(){
            echo "Hello";
        }
    }

    trait B{
        public function sayWorld(){
            echo "World";
        }
    }

    class myHelloWorld{
        use A, B;  // A class can use multiple traits
        public function sayHelloWorld(){
            $this->sayHello();
        echo ' ';
        $this->sayWorld();
        echo "!\n";
    }
}

$myHelloWorld = new MyHelloWorld();
$myHelloWorld->sayHelloWorld();

    ?>
</body>
</html>