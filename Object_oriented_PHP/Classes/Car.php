<?php
class Car
{
    //Properties
    private $brand;
    private $color;
    public $vehiclesType = "car";

    //Constructor
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }
    //Getter and Setter method
    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($brand)
    {
        return $this->brand = $brand;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $arrayColor = [
            'red',
            'green',
            'yellow',
            'black'
        ];
        if (in_array($color, $arrayColor)) {
            return $this->color = $color;
        }
    }
    //Method
    public function getCarInfo()
    {
        return "Brand: " . $this->brand . ",Color: " . $this->color;
    }
}
