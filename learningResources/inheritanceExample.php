<?php 

class Vehicle {
    protected $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function showBrand() {
        echo "Brand: " . $this->brand;
    }
}

class Car extends Vehicle {
    private $color;

    public function __construct($brand, $color) {
        parent::__construct($brand);
        $this->color = $color;
    }

    public function showColor() {
        echo "Color: " . $this->color;
    }
}

$myCar = new Car("Toyota", "Blue");
$myCar->showBrand();
$myCar->showColor();
?> 