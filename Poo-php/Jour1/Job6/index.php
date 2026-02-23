<?php
require_once("./models/Personnage.php");

$personnage = new Personnage(1,1);
$personnage->position() . "<br>";
echo $personnage->gauche(-1) . "<br>";
$personnage->position() . "<br>";
echo $personnage->droite(1) . "<br>";
$personnage->position() . "<br>";
echo $personnage->haut(1) . "<br>";
$personnage->position() . "<br>";
echo $personnage->bas(-1) . "<br>";
$personnage->position() . "<br>";
?>