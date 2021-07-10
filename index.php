<?php

require __DIR__ . "/classes/Product.php";
require __DIR__ . "/classes/Customer.php";

$customer1 = new Customer("Paolo", "Citti", 30, "M");
$customer2 = new Customer("Giulia", "Arcani", 26, "F");

$products1 = [
    $product1 = new Product("Iphone X", "Reparto Informatica", "https://m.media-amazon.com/images/I/71IluxZN8pL._AC_UL800_QL65_.jpg", 1, 300.50, "Tecnologia"),

    $product2 = new Product("Penne Rigate", "Reparto Alimentari", "https://flashdistribuzione.com/wp-content/uploads/2020/10/PENNE-RIGATE-600x600.jpg", 5, 3.50, "Alimentari"),

    $product3 = new Product("Nikon D5500", "Reparto Hobby", "https://www.weshoot.it/blog/wp-content/uploads/2015/01/phpigsx3r.jpg", 1, 320, "Tempo Libero")

];


$products2 = [
    $product1 = new Product("Tablet", "Reparto Informatica", "https://media.bytecno.it/catalog/product/1/_/1_740.jpg", 1, 240.00, "Tecnologia"),

    $product2 = new Product("Insalata", "Reparto Alimentari", "https://d21mug5vzt7ic2.cloudfront.net/primenow/75934/resize/75934_2.jpg", 3, 4.80, "Alimentari"),

    $product3 = new Product("Gazebo", "Reparto Hobby", "https://images-na.ssl-images-amazon.com/images/I/812mSm7TTnL._AC_SX466_.jpg", 1, 230, "Tempo Libero")
];

// $products1[0]->getPrime(true);
echo $products1[0]->setPrime(true);
echo $products1[1]->setPrime(false);
echo $products1[2]->setPrime(true);
echo $products2[0]->setPrime(false);
echo $products2[1]->setPrime(true);
echo $products2[2]->setPrime(true);
// var_dump($products2[2]);
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