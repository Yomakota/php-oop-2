<?php
trait WarrantyCard
{
    public $code;
    public $time = 5;

    public function getWarrantyCode()
    {
        $this->code = rand(1000000, 5000000);
        return $this->code;
    }
}