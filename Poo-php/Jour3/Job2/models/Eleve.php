<?php
Class Eleve extends Personne {

public function allerEnCours()
{
    return "Je vais en cours <br>";
}
public function afficherAge()
{
    return "J'ai $this->age ans <br>";
}
}

?>