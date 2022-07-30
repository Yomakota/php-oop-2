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

require_once __DIR__ . '/Card.php';

//PRODUCTS
$dog_food = new PetFood('Dog', 'Biscuits', 'Happy Dog®', 50);
//var_dump($dog_food);
$dog_shampoo = new PetShampoo('Dog', 'Shampoo', 'Clean Dog®', 20);
//var_dump($dog_shampoo);
$dog_house = new PetHouses('Dog', 'Dog-house', 'Renzo Piano Pets House®', 200);
//var_dump($dog_house);
$dog_game = new PetGames('Dog', 'Dog-game', 'Have fan Dog®', 35);
//var_dump($dog_game);


//USER
$user = new User;
$user->addToBasket($dog_food);
$user->addToBasket($dog_shampoo);
$user->totalPrice();
//var_dump($user);

//REGISTER-USER
$loggedUser = new RegisteredUser('rossi', 'rossi@mail.com');
$loggedUser->addToBasket($dog_food);
$loggedUser->addToBasket($dog_shampoo);
$loggedUser->totalPrice();
// var_dump($loggedUser);

//CARD
$card = new Card('rossi', '12335677', '03/23', '123');
$card->amount = 1000;
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Pets Shop</title>
    </head>

    <body>
        <?php if ($user->getPayment($card) === 'ok') { ?>
        <h2> Thanks for shopping </h2>
        <?php foreach ($loggedUser->getProductsChosen() as $item) { ?>
        <div>
            <?php echo $item->productsDetails(); ?>
        </div>
        <?php } ?>
        <h3>
            Totale:
            <?php echo $loggedUser->totalPrice(); ?>
            euro
        </h3>
        <?php } else { ?>
        <h2>No Enough Credits for this transition</h2>
        <?php } ?>
    </body>

</html>