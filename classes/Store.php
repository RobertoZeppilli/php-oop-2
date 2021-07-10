<?php
class Store {
    private $name;
    private $location;

    function __construct($name = "", $location = "") {
        $this->name = $name;
        $this->location = $location;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setLocation($location) {
        $this->location = $location;
    }
    public function getLocation() {
        return $this->location;
    }
}