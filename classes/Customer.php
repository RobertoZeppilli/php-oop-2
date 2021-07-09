<?php 

class Customer {

    private $name;
    private $surname;
    private $age;
    private $gender;

    function __construct($name = "", $surname = "", $age = 0, $gender = "") {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function getFullName() {
        $prefix = ($this->gender == "M") ? "Sig. " : "Sig.ra ";
        return $prefix . " " . $this->name . " " . $this->surname;
    }
}
