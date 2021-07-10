<?php
trait Discount {
    public $discount;
    public $categoryName;

    public function getDiscount()
    {
        return ($this->categoryName == "Tecnologia") ? $this->discount = 30
               : (($this->categoryName == "Alimentari") ? $this->discount = 20
               : $this->discount = 10);
    }

}

