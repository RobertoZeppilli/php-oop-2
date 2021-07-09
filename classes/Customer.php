<?php 

class Customer {
    private $name;
    private $surname;
    private $discount;
    private $age;
    private $gender;


    function __construct($name = "", $surname = "", $discount, $age, $gender) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->discount = $discount;
        $this->gender = $gender;
    }

    public function getAge() {
        return $this->age;
    }

    public function getFullName() {
        $prefix = ($this->gender == "M") ? "Sig. " : "Sig.ra ";
        return $prefix . " " . $this->name . " " . $this->surname;
    }
    
    public function getDiscount() {
        if($this->age <= 30) {
           return "- " . 40 . "%";
        } else {
           return "- " . 10 . "%";
        }
    }

}
