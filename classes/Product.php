<?php
require_once __DIR__ . "/../traits/discount.php";
require_once __DIR__ . "/Store.php";
class Product extends Store
{
    use Discount;

    private $productPicture;
    private $quantity;
    private $price;
    private $prime;

    function __construct($name = "", $location = "", $productPicture, $quantity, $price, $categoryName, $discount = 0)
    {
        parent::__construct($name, $location);
        $this->productPicture = $productPicture;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->categoryName = $categoryName;
        $this->discount = $discount;
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
    
    public function setPrime($prime) {
        $this->prime = $prime;
    }
    public function getPrime() {
        return ($this->prime) ? "Spedizione Gratuita " . '<i class="fas fa-check"></i>' : "Spedizione non inclusa " . '<i class="fas fa-times"></i>';
    }
    public function getFinalPrice() {
       return number_format($this->price - ($this->price * $this->discount / 100), 2) . "$";
    }
}
