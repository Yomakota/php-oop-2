<?php

class PetShopProducts
{
    protected $animal;
    protected $type;
    protected $brand;
    public $price;

    public function __construct($_animal, $_type, $_brand, $_price)
    {
        $this->animal = $_animal;
        $this->type = $_type;
        $this->brand = $_brand;
        $this->price = $_price;
    }

    public function productsDetails()
    {
        return "$this->type $this->brand $this->price euro";
    }
}