<?php

require_once __DIR__ . '/PetShopProducts.php';
require_once __DIR__ . '/WarrantyCard.php';

class PetHouses extends PetShopProducts
{
    use WarrantyCard;
    public $model = 'castle';
}