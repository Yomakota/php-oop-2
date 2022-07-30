<?php
class Card
{
    protected $name;
    protected $number;
    protected $expireDate;
    protected $cvv;
    public $credit = 0;

    public function __construct($_name, $_number, $_expireDate, $_cvv)
    {
        $this->name = $_name;
        $this->number = $_number;
        $this->expireDate = $_expireDate;
        $this->cvv = $_cvv;
    }
}