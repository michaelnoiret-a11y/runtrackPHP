<?php
Class Livre {
    private $titre;
    private $auteur;
    private $nombreDePages;
    private $disponible;

public function __construct($titre, $auteur, $nombreDePages, $disponible = True)
{
    $this->titre = $titre;
    $this->auteur = $auteur;
    $this->setnombreDePages($nombreDePages);
    $this->disponible = $disponible;
}
public function setTitre($titre)
{
    $this->titre = $titre;
}
public function getTitre()
{
    return $this->titre;
}
public function setAuteur($auteur)
{
    $this->auteur = $auteur;
}
public function getAuteur()
{
    return $this->auteur;
}
public function setNombreDePages($nombreDePages)
{
    if (!is_int($nombreDePages) || $nombreDePages <= 0) {
        echo "Nombre de pages doit être un entier positif . <br>";
    } else {
        $this->nombreDePages = $nombreDePages;
}
}
public function getNombreDePages()
{
    return $this->nombreDePages;
}
public function getverification()
{
        return $this->disponible;
}
public function emprunter() 
{
   if ($this->disponible){
    $this->disponible = False;
   echo "Livre emprunté.<br>";
        } else {
            echo "Le livre n'est pas disponible.<br>";
        }
    }
public function rendre() 
{
    if ($this->disponible){
    $this->disponible = True;
    echo "Livre rendu.<br>";
    }
}
}