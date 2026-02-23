<?php
Class Professeur {
private $matiereEnseignee;

public function __construct($matiereEnseignee="Développement Web") {

$this->matiereEnseignee = $matiereEnseignee;
}
public function enseigner()
{
    return "Le cours va commencer";
}
}

?>