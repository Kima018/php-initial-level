<?php

require_once "Vehicle.php";

class Car extends Vehicle
{
    public string $brand;
    public string $model;
    public string $color;

    public function __construct($brand, $model, $color)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }


}
