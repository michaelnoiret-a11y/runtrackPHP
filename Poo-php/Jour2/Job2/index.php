<?php
require_once("./models/Livre.php");

$livre = new Livre("", "", 0);
echo "le titre est: " . $livre->setTitre("Walking in Another World");
echo "l'auteur est: " . $livre->setAuteur("Arukuhito, Ogawa Kei, Yunitto");
echo "le nombre de pages est: " . $livre->setNombreDePages(192);

?>