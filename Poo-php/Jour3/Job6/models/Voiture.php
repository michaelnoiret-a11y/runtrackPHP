<?php
Class Voiture extends Vehicule 
{
    public $portes;
    
    public function __construct($portes = 4)
    {
        $this->portes = $portes;
    }
    public function informationsVehicule($marque, $modele, $annee, $prix, $portes)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
        $this->portes = $portes;
        return $this->marque . $this->modele . $this->annee . $this->prix . $portes;
    }
    public function demarrer()
    {
        return "Attention, je conduis";
    }
}

?>