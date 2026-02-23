<?php
Class Commande {
    private $numeroDeCommande;
    private $listeDePlatsCommandes;
    private $statutDeLaCommande;

    public function __construct($numeroDeCommande, $listeDePlatsCommandes, $statutDeLaCommande)
    {
        $this->numeroDeCommande = $numeroDeCommande;
        $this->listeDePlatsCommandes = $listeDePlatsCommandes;
        $this->statutDeLaCommande = $statutDeLaCommande;
    }
    public function ajouterPlat()
    {

    }
    public function annulerCommande()
    {

    }
    private function prixCommande()
    {

    }
    
}