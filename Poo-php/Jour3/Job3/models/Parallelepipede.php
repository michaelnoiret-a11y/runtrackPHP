<?php
Class Parallelepipede extends Rectangle {

private $hauteur;
public function __construct($hauteur, $longueur, $largeur)
{
    $this->hauteur = $hauteur;
}
public function gethauteur()
{
    return $this->hauteur;
}
public function sethauteur($newhauteur)
{
    return $this->hauteur = $newhauteur; 
}

public function volume() {

return $this->setlargeur(5) * $this->setlongueur(5) * $this->sethauteur(5);
}
}
?>