<?php
Class Cercle extends Forme {

public $radius;
public function aire($radius = 3)
{
    $this->radius = $radius;
    return pi() * ($this->radius ** 2);
}
}
?>

