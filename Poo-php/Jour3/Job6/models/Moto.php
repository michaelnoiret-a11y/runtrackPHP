<?php
Class Moto extends Vehicule
{
    public $roues = 2;

    public function __construct($roues = 2)
    {
        $this->roues = $roues;
    }
    public function informationsVehicule($marque, $modele, $annee, $prix, $portes, $roues)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
        $this->roues = $roues;
        return $this->marque . $this->modele . $this->annee . $this->prix . $roues;
    }
    public function demarrer()
    {
        return "Attention, je bourlingue";
    }
}
?>