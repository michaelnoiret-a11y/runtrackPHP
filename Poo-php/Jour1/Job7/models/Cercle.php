<?php
Class Cercle {
    public $rayon;

    public function __construct($rayon)
    {
        $this->rayon = $rayon;
    }
    public function changerRayon($newrayon)
    {
        return $this->rayon = $newrayon;
    }
    public function afficherInfos()
    {
        echo $this->rayon . "<br>";
        echo $this->circonférence() . "<br>";
        echo $this->aire() . "<br>";
        echo $this->diametre() . "<br>";
    }
    public function circonférence()
    {
        return $this->rayon * 3.14 * 2;
    }
    public function aire()
    {
        return 3.14 * $this->rayon * $this->rayon;
    }
    public function diametre()
    {
        return 2 * $this->rayon;
    }
}