<?php
class Store {
    protected $name;
    protected $location;

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