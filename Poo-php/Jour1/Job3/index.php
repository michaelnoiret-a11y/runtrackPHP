<?php
require_once("./models/Personne.php");
$personne = new Personne("Noiret ","Michaël");
$personne1 = new Personne("Noiret ", "Alexis");
// $personne->nom = "Noiret ";
// $personne->prenom = "Michael ";
// $personne1->nom = "Noiret ";
// $personne1->prenom = "Alexis ";

echo "Je suis " . $personne->SePresenter() . "<br>";
echo "Je suis " . $personne1->SePresenter();
?>