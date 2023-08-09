<?php
class Car {
    public $brand;
    public $model;

    function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    function showInfo() {
        echo "This is a {$this->brand} {$this->model} car.";
    }
}

$myCar = new Car("Toyota", "Camry");
$myCar->showInfo(); // Output: This is a Toyota Camry car.

?>