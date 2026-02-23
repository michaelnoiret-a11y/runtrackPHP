<?php
require_once("./models/Rectangle.php");
require_once("./models/Parallelepipede.php");

$rectangle = new Rectangle(1,1);
$parallelepipede = new Parallelepipede(5,1,1);
echo $rectangle->getlargeur();
echo $rectangle->getlongueur();
$rectangle->setlargeur(5);
$rectangle->setlongueur(5);
echo $rectangle->perimetre() . "<br>";
echo $rectangle->surface() . "<br>";
echo $parallelepipede->volume() . "<br>";
?>