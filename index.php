<?php

/*Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c); */

require __DIR__ . "/classes/Product.php";
require __DIR__ . "/classes/Customer.php";

$customer1 = new Customer("Paolo", "Citti", 30, "M", false);
$customer2 = new Customer("Giulia", "Arcani", 26, "F", true);


$products1 = [
    $product1 = new Product("Iphone X", "https://m.media-amazon.com/images/I/71IluxZN8pL._AC_UL800_QL65_.jpg", 4, 300.50, "Tecnologia"),

    $product2 = new Product("Penne Rigate", "https://flashdistribuzione.com/wp-content/uploads/2020/10/PENNE-RIGATE-600x600.jpg", 6, 3.50, "Alimentari"),

    $product3 = new Product("Nikon D5500", "https://www.weshoot.it/blog/wp-content/uploads/2015/01/phpigsx3r.jpg", 10, 320, "Tempo Libero")

];

$products2 = [
    $product1 = new Product("Tablet", "https://media.bytecno.it/catalog/product/1/_/1_740.jpg", 22, 240.00, "Tecnologia"),

    $product2 = new Product("Insalata", "https://d21mug5vzt7ic2.cloudfront.net/primenow/75934/resize/75934_2.jpg", 45, 4.80, "Alimentari"),

    $product3 = new Product("Gazebo", "https://images-na.ssl-images-amazon.com/images/I/812mSm7TTnL._AC_SX466_.jpg", 2, 230, "Tempo Libero")
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
            <div class="customer">
                <h2><?= $customer1->getFullName() ?></h2>
                <section class="products">
                    <?php foreach ($products1 as $product) {
                    ?>
                        <div class="product">
                            <h3><?= $product->getName() ?></h3>
                            <img src="<?= $product->getImg() ?>" alt="">
                            <div class="info">
                                <h5 class="price">Prezzo: <?= $product->getPrice() ?></h5>
                                <h5>Sconto: <?= $product->getDiscount() ?>%</h5>
                                <h5>Prezzo Scontato: <?= $product->getFinalPrice() ?></h5>
                                <h6>Disponibili: <?= $product->getQuantity() ?></h6>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
            <div class="customer">
                <h2><?= $customer2->getFullName() ?></h2>
                <section class="products">
                    <?php foreach ($products2 as $product) {
                    ?>
                        <div class="product">
                            <h3><?= $product->getName() ?></h3>
                            <img src="<?= $product->getImg() ?>" alt="">
                            <div class="info">
                                <h5 class="price">Prezzo: <?= $product->getPrice() ?></h5>
                                <h5>Sconto: <?= $product->getDiscount() ?>%</h5>
                                <h5>Prezzo Scontato: <?= $product->getFinalPrice() ?></h5>
                                <h6>Disponibili: <?= $product->getQuantity() ?></h6>
                            </div>
                        </div>
                    <?php } ?>
                </section>
            </div>
        </div>
    </main>
</body>

</html>