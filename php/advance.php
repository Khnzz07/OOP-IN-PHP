<?php
class Vehicle {
    public $brand;
    public $year;

    function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }

    function getInfo() {
        return "{$this->year} {$this->brand}";
    }
}

class Car extends Vehicle {
    public $model;

    function __construct($brand, $model, $year) {
        parent::__construct($brand, $year);
        $this->model = $model;
    }

    function getInfo() {
        return parent::getInfo() . " {$this->model} Car";
    }
}

class Motorcycle extends Vehicle {
    public $type;

    function __construct($brand, $type, $year) {
        parent::__construct($brand, $year);
        $this->type = $type;
    }

    function getInfo() {
        return parent::getInfo() . " {$this->type} Motorcycle";
    }
}

$car = new Car("Toyota", "Camry", 2022);
$motorcycle = new Motorcycle("Harley-Davidson", "Sportster", 2021);

echo $car->getInfo(); // Output: 2022 Toyota Camry Car
echo $motorcycle->getInfo(); // Output: 2021 Harley-Davidson Sportster Motorcycle

?>