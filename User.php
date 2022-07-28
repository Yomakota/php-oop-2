<?php
// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.

class User
{
    public $discount = 0;
    protected $productsChosen = [];
    public $amount = 1000;

    public function addToBasket($item)
    {
        $this->productsChosen[] = $item;
    }

    public function getProductsChosen()
    {
        return $this->productsChosen;
    }

    public function totalPrice()
    {
        $totalSum = 0;
        foreach ($this->productsChosen as $item) {
            $totalSum += $item->price;
        }

        $totalSum -= $totalSum * $this->discount / 100;
        return $totalSum;
    }
    public function getPayment()
    {
        $totalPrice = $this->totalPrice();

        if ($this->amount < $totalPrice) {
            die('No enough money');
        } else {
            return 'ok';
        }
    }
}