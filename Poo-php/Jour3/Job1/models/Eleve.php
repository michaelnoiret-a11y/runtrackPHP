<?php
Class Eleve extends Personne {

public function allerEnCours()
{
    return "Je vais en cours";
}
public function afficherAge()
{
    return "J'ai $this->age ans";
}
}

?>