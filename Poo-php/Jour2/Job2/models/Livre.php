<?php
Class Livre {
    private $titre;
    private $auteur;
    private $nombreDePages;

public function __construct($titre, $auteur, $nombreDePages)
{
    $this->titre = $titre;
    $this->auteur = $auteur;
    $this->nombreDePages = $nombreDePages;
}
public function setTitre($titre)
{
    return $this->titre = $titre . "<br>";
}
public function getTitre()
{
    return $this->titre . "<br>";
}
public function setAuteur($auteur)
{
    return $this->auteur = $auteur . "<br>";
}
public function getAuteur()
{
    return $this->auteur . "<br>";
}
public function setNombreDePages($nombreDePages)
{
    if ($nombreDePages <= 0 || is_float($nombreDePages)) {
        echo "Nombre de pages doit être un entier positif";
    }
    else
        {
    return $this->nombreDePages = $nombreDePages . "<br>";
}
}
public function getNombreDePages()
{
    return $this->nombreDePages . "<br>";
}
}