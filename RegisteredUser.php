<?php

require_once __DIR__ . '/User.php';

class RegisteredUser extends User
{
    public $nameUser;
    public $emailUser;
    public $discount = 20;

    public function __construct($_nameUser, $_emailUser)
    {
        $this->nameUser = $_nameUser;
        $this->emailUser = $_emailUser;
    }
}