<?php
Class Rectangle {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur)
    {
        $this->largeur = $largeur;
        $this->longueur = $longueur;
    }
    public function getLargeur()
    {
        return $this->largeur . "<br>";
    }
    public function setLargeur($largeur) 
    {
        return $this->largeur = $largeur . "<br>";
    }
    public function getLongueur()
    {
        return $this->longueur . "<br>";
    }
    public function setLongueur($longueur)
    {
        return $this->longueur = $longueur . "<br>";
    }
}