<?php
require_once("./models/Forme.php");
require_once("./models/Cercle.php");
require_once("./models/Rectangle.php");

$rectangle = new Rectangle(5,5);
echo $rectangle->aire() . "<br>";
$cercle = new Cercle();
echo $cercle->aire();
?>