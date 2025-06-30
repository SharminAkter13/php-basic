<?php
class Car {
    // Properties of the Car class
    public $make;
    public $model;
    public $year;

    public function displayCarDetails($year,$make,$model) {
        return "This car is a {$this->year} {$this->make} {$this->model}.<br>";
    }
}
?>