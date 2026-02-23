<?php
Class Professeur extends Personne{
private $matiereEnseignee;

public function __construct( $matiereEnseignee="Développement Web", $age = 14) {
parent::__construct($age);
$this->matiereEnseignee = $matiereEnseignee;
}
public function enseigner()
{
    return "Le cours va commencer <br>";
}
// public function afficherAge()
// {
//     echo "J'ai $this->age ans <br>";
// }
}
?>