<?php 
require_once __DIR__ . "/../classes/Customer.php";
?>
<header>
    <div class="container">
        <h1><?= $customer->getFullName() ?></h1>
    </div>
</header>