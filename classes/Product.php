<?php
require_once __DIR__ . "/Category.php";

class Product extends Category
{

    private $name;
    private $productPicture;
    private $quantity;
    private $price;
    private $finalPrice;

    function __construct($name, $productPicture, $quantity, $price, $categoryName, $discount = 0)
    {
        parent::__construct($categoryName, $discount);
        $this->name = $name;
        $this->productPicture = $productPicture;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->categoryName = $categoryName;
        $this->discount = $discount;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getImg()
    {
        return $this->productPicture;
    }

    public function getPrice()
    {
        return $this->price . "$";
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setFinalPrice($finalPrice) {
        $this->finalPrice = $finalPrice;
    }

    public function getFinalPrice() {
       return number_format($this->price - ($this->price * $this->discount / 100), 2) . "$";
    }

    public function getDiscount()
    {
        if ($this->categoryName == "Tecnologia") {
            return $this->discount = 20;
        } elseif ($this->categoryName == "Alimentari") {
            return $this->discount = 30;
        } else {
            return $this->discount = 10;
        }
    }
}
