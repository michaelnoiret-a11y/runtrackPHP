<?php
require_once("./models/Voiture.php");

$voiture = new Voiture("Tesla", "X", 2020, 1000, $this->verifier_plein(1)) ;
?>