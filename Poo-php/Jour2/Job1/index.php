<?php
require_once("./models/Rectangle.php");

$rectangle = new Rectangle(10,5);
echo "longueur = " . $rectangle->setLargeur(10) ;
echo "largeur = " . $rectangle->getLargeur();
echo "longueur = " . $rectangle->setLongueur(5) ;
echo "largeur = " . $rectangle->getLongueur();

?>