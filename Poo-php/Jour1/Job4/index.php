<?php
require_once("./models/Point.php");

$point = new Point(4,3);
//$point1 = new Point(2,6);

$point->afficherLesPoints() . "<br>";
$point->afficherX() . "<br>";
$point->afficherY() . "<br>";
$point->changerX(5) . "<br>";
$point->changerY(8) . "<br>";
$point->afficherX() . "<br>";
$point->afficherY() . "<br>";