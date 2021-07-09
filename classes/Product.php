<?php
class Product 
{

    private $name;
    private $productPicture;
    private $quantity;
    private $price;
    private $categoryName;
    private $discount;

    function __construct($name, $productPicture, $quantity, $price, $categoryName, $discount = 0)
    {
        $this->name = $name;
        $this->productPicture = $productPicture;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->categoryName = $categoryName;
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
        return number_format($this->price, 2) . "$";
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getFinalPrice() {
       return number_format($this->price - ($this->price * $this->discount / 100), 2) . "$";
    }

    public function getDiscount()
    {
        return $this->categoryName == "Tempo Libero" ? $this->discount = 20 : $this->discount = 5;
    }
}
