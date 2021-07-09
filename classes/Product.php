<?php 
require_once __DIR__ . "/Category.php";

class Product extends Category {

    private $name;
    private $productPicture;
    private $quantity;
    private $price;

    function __construct($name, $productPicture, $quantity, $price, $sector, $categoryName) {
        parent::__construct($sector, $categoryName);
        $this->name = $name;
        $this->productPicture = $productPicture;
        $this->quantity = $quantity;
        $this->price = $price;       
    }

    public function getName() {
        return $this->name;
    }

    public function getImg() {
        return $this->productPicture;
    }

    public function getPrice() {
        return $this->price . "$";
    }

    public function getQuantity() {
        return $this->quantity;
    }
}

