<?php
Class Vehicule {
    public $marque;
    public $modele;
    public $annee;
    public $prix;

    public function informationsVehicule($marque, $modele, $annee, $prix)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->prix = $prix;
        return $this->marque . $this->modele . $this->annee . $this->prix;
    }
    public function demarrer()
    {
        return "Attention, je roule";
    }
}
?>