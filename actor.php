<?php

class Actor {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getInfo() {
        return "Nome: " . $this->name . ", Età: " . $this->age;
    }
}