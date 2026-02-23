<?php
require_once("./models/Livre.php");

$livre = new Livre("Walking in Another World", "Arukuhito, Ogawa Kei, Yunitto", 192);
$livre->emprunter();
$livre->emprunter();
$livre->rendre();
?>