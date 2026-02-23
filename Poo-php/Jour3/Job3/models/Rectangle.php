<?php
Class Rectangle {
    private $longueur;
    private $largeur;

   
    public function getlongueur()
    {
        return $this->longueur;
    }
    public function setlongueur($newlongueur)
    {
        return $this->longueur = $newlongueur;
    }
    public function getlargeur()
    {
        return $this->largeur;
    }
    public function setlargeur($newlargeur)
    {
        return $this->largeur =$newlargeur;
    }
    public function perimetre()
    {
        return 2 * ($this->longueur + $this->largeur);
    }
    public function surface()
    {
        return $this->longueur * $this->largeur;
    }
}
?>