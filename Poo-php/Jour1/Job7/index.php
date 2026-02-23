<?php
require_once("./models/Cercle.php");

$cercle = new Cercle(4);
$cercle1 = new Cercle(7);
echo $cercle->afficherInfos();
echo $cercle1->afficherInfos();
?>