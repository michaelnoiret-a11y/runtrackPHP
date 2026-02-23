<?php
require_once("./models/Personne.php");
require_once("./models/Eleve.php");
require_once("./models/Professeur.php");

$personne = new Personne();
$eleve = new Eleve();
echo $eleve->bonjour();
echo $eleve->allerEnCours();
$eleve->modifierAge(15);
echo $eleve->afficherAge();

$professeur = new Professeur("Développement Web", 40);
echo $professeur->bonjour();
echo $professeur->enseigner();
$professeur->afficherAge();
?>