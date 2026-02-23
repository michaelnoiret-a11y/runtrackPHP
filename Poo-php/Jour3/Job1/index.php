<?php
require_once("./models/Personne.php");
require_once("./models/Eleve.php");
require_once("./models/Professeur.php");

$personne = new Personne();
$eleve = new Eleve();
echo $eleve->afficherAge();
?>