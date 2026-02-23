<?php
require_once("./models/Vehicule.php");
require_once("./models/Voiture.php");
require_once("./models/Moto.php");

$voiture = new Voiture();
echo $voiture->informationsVehicule("Mercedes", "Classe A", 2020, 18500, 4);
$moto = new Moto();
echo $moto->informationsVehicule("Yamaha", "1200 Vmax", 1987, 4500, 2);
$voiture->demarrer();
$moto->demarrer();
?>