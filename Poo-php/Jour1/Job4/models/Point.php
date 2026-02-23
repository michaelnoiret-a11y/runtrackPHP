<?php
Class Point {
    public $x;
    public $y;

    public function __construct($x = 0, $y = 0)
    {
        $this-> x = $x;
        $this-> y = $y;
    }
    public function afficherLesPoints()
    {
        echo $this->x;
        echo $this->y;
    }
    public function afficherX()
    {
        echo $this->x;
    }
    public function afficherY()
    {
        echo $this->y;
    }
    public function changerX($newX)
    {
        return $this->x = $newX;
    }
    public function changerY($newY)
    {
        return $this->y = $newY;
    }
}