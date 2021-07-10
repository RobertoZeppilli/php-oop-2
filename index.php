<?php

require __DIR__ . "/classes/Product.php";
require __DIR__ . "/classes/Customer.php";

require_once __DIR__ . "/data/products.php";

$customer1 = new Customer("paolo", "citti", 30, "M");
$customer2 = new Customer("giulia", "arcani", 26, "F");

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
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
                                    <h4><?= $product->getPrime() ?></h4>
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
                                    <h4><?= $product->getPrime() ?></h4>
                                </div>
                            </div>
                        <?php } ?>
                    </section>
                </div>
            </div>
        </main>
    </body>

</html>