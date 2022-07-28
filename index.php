<?php
// Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
// L'e-commerce vende prodotti per gli animali.
// I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

// L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.

// BONUS:
// Il pagamento avviene con la carta prepagata che deve contenere un saldo sufficiente all'acquisto.

require_once __DIR__ . '/PetFood.php';
require_once __DIR__ . '/PetShampoo.php';
require_once __DIR__ . '/PetHouses.php';
require_once __DIR__ . '/PetGames.php';

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/RegisteredUser.php';

// require_once __DIR__ . '/Card.php';

//PRODUCTS
$dog_food = new PetFood('dog', 'biscuits', 'happy dog', 50);
var_dump($dog_food);
$dog_shampoo = new PetShampoo('dog', 'shampoo', 'clean dog', 20);
var_dump($dog_shampoo);
$dog_house = new PetHouses('dog', 'dog-house', 'Renzo Piano Pets House', 200);
var_dump($dog_house);
$dog_game = new PetGames('dog', 'dog-game', 'have fan dog', 35);
var_dump($dog_game);


//USER
$user = new User;
$user->addToBasket($dog_food);
$user->addToBasket($dog_shampoo);
$user->totalPrice();
$user->getPayment();
var_dump($user);
var_dump($user->getPayment());

//REGISTER-USER
$loggedUser = new RegisteredUser('rossi', 'rossi@mail.com');
$loggedUser->addToBasket($dog_food);
$loggedUser->addToBasket($dog_shampoo);
$loggedUser->totalPrice();
$loggedUser->getPayment();
var_dump($loggedUser);
var_dump($loggedUser->getPayment());

//CARD
// $card = new Card('rossi', 'rossi@mail', '03/23', '123', 1000);
// var_dump($card);