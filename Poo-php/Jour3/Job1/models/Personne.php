<?php
Class Personne {

public $age;

public function __construct($age =14 )
{
    $this->age = $age;
}

public function afficherAge()
{
    return $this->age;
}
public function bonjour()
{
    return "Hello";
}
public function modifierAge($newAge)
{
    $this->age = $newAge;
}
}
?>