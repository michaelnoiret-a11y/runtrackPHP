<?php
Class Voiture {
    private $marque;
    private $modele;
    private $annee;
    private $kilometrage;
    private $en_marche;
    private $reservoir;

    public function __construct($marque, $modele, $annee, $kilometrage, $en_marche = False, $reservoir = 50)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->en_marche = $en_marche;
        $this->reservoir = $reservoir;
    }
    public function demarrer()
    {
        if ($this->verifier_plein() > 5) {
        $this->en_marche = True;
        }
    }
    public function arreter()
    {
        $this->en_marche = False;
    }
    private function verifier_plein()
    {
        return $this->reservoir;
    }
}