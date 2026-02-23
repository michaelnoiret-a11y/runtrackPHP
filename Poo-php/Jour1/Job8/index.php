<?php
require_once("./models/Produit.php");

$produit = new Produit("Ordinateur",800,20, );
$produit1 = new Produit("Téléphone", 400, 20);
$produit2 = new Produit("Tablette", 200, 20);
// echo $produit->Afficher();
// echo $produit1->AfficherNom();
// echo $produit2->AfficherPrixHT();
echo $produit->RenommerProduit("PC");
echo $produit->ChangerPrix(300);
echo $produit->CalculerPrixTTC();
echo $produit->Afficher();
?>