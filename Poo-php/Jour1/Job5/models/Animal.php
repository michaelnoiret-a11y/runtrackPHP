<?php
Class Animal {

    public $age;
    public $prenom;

    public function __construct($prenom, $age = 0)
    {
        $this-> age = $age;
        $this-> prenom = $prenom;
    }
    public function vieillir()
    {;

        return $this->age += 1;
    }
    public function nommer()
    {
        return $this->prenom = "Luna";
    }
    
}