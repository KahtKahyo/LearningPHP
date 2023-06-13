<?php
class Car {
    public $brand;
    public $color;

    public function startEngine() {
        echo "Engine started!";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->color = "Blue";
$myCar->startEngine();

?>