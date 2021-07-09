<?php 
class Category {
    private $categoryName;
    private $discount;
   
    
    function __construct($categoryName, $discount = 0) {
        $this->categoryName = $categoryName;
        $this->discount = $discount;
    }

    

}