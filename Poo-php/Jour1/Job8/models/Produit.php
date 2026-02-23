<?php
Class Produit {
    public $nom;
    public $prixHT;
    public $TVA;

    public function __construct($nom = "",$prixHT = 0, $TVA = 20)
    {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }
    public function CalculerPrixTTC() 
    {
         $montantTva= $this->prixHT * $this->TVA/100;
        
        return $montantTva . "<br>";
    }
    public function RenommerProduit($newNom)
    {
        $this->nom = $newNom;
        return $this->nom . "<br>";
    }
    public function ChangerPrix($newprixHT)
    {
        $this->prixHT = $newprixHT;
        return $this->prixHT . "<br>";
    }
    public function AfficherNom()
    {
        return $this->nom . "<br>";
    }
    public function AfficherPrixHT()
    {
        return $this->prixHT . "<br>";
    }
    public function AfficherTVA()
    {
        return $this->TVA . "<br>";
    }
    public function Afficher()
    {
        return $this->nom . "<br>" . $this->prixHT . "<br>" . $this->CalculerPrixTTC() ;
    }
}