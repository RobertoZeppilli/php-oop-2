<?php 

class Customer {
    private $name;
    private $surname;
    private $age;
    private $gender;
    private $premium;


    function __construct($name = "", $surname = "", $age, $gender, $premium) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->gender = $gender;
        $this->premium = $premium;
    }

    public function getAge() {
        return $this->age;
    }

    public function getFullName() {
        $prefix = ($this->gender == "M") ? "Sig. " : "Sig.ra ";
        return $prefix . " " . $this->name . " " . $this->surname;
    }
}
