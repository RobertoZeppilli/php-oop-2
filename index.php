<?php

/*Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c); */

require __DIR__ . "/classes/Product.php";
require __DIR__ . "/classes/Customer.php";
$discount = 30;

$customer = new Customer("Paolo", "Citti", 0, 30, "M");



$products = [
    $product1 = new Product("Iphone", "https://m.media-amazon.com/images/I/71IluxZN8pL._AC_UL800_QL65_.jpg", 4, 300.50, "Tecnologia", "Smartphone"),

    $product2 = new Product("Iphone", "https://m.media-amazon.com/images/I/71IluxZN8pL._AC_UL800_QL65_.jpg", 6, 350, "Tecnologia", "Smartphone"),

    $product3 = new Product("Iphone", "https://m.media-amazon.com/images/I/71IluxZN8pL._AC_UL800_QL65_.jpg", 10, 320, "Tecnologia", "Smartphone")

];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Shop</title>
</head>

<body>
    <?php include __DIR__ . "/partials/header.php" ?>

    <main>
        <div class="container">
            <section class="products">
                <?php foreach ($products as $product) {
                ?>
                    <div class="product">
                        <h2><?= $product->getName() ?></h2>
                        <img src="<?= $product->getImg() ?>" alt="">
                        <h5>Prezzo: <?= $product->getPrice() ?></h5>
                        <h5>Sconto: <?= $customer->getDiscount() ?></h5>
                        <h6>Quantità: <?= $product->getQuantity() ?></h6>
                    </div>
                <?php } ?>
            </section>
        </div>
    </main>
</body>

</html>