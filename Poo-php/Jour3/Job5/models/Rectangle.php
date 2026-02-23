<?php
Class Rectangle extends Forme {
    public $largeur;
    public $longueur;

    public function __construct($longueur, $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }
    public function aire(){
        return $this->longueur * $this->largeur;
    }
}
?>