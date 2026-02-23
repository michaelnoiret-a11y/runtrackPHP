<?php
require_once("./models/Animal.php");

$animal = new Animal("Luna", 27);
echo "L'age de l'animal est " . $animal->age . " ans" . "<br>";
echo "# Age de l'animal après appel de la méthode vieillir " . "<br>";
echo "L'age de l'animal est " . $animal->vieillir() . " ans" . "<br>";
echo "L'animal se nomme  " . $animal->nommer() . "<br>";
?>