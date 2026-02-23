<?php
// Définition de la classe
Class Operation {

    // Attributs/Propriétés : variables d'instances
    public $nombre1;
    public $nombre2;

    // Constructeur : 
    public function __construct( $nombre1 = 0, $nombre2 = 0)
    {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }
    public function addition() {
        echo $this->nombre1 + $this->nombre2;
    }
}