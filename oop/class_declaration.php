<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class Declaration</title>
</head>
<body>
<?php

class Car {
    // Properties of the Car class
    public $make;
    public $model;
    public $year;

    public function __destruct() {
        echo "The Car object ({$this->make} {$this->model}) is being destroyed.<br>";
    }

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        echo "A new Car object has been created: {$this->year} {$this->make} {$this->model}<br>";
    }

    public function displayCarDetails() {
        return "This car is a {$this->year} {$this->make} {$this->model}.<br>";
    }
}

echo "--- Creating Car Objects ---<br>";

$car1 = new Car("Toyota", "Camry", 2023);
echo $car1->displayCarDetails();

echo "<br>";
$car2 = new Car("Honda", "Civic", 2022);
echo $car2->displayCarDetails();

echo "<br>";

echo "--- End of Script ---<br>";

?>

</body>
</html>