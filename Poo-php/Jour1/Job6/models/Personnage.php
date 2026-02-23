<?php
Class Personnage {
    public $x;
    public $y;

    public function __construct($x = 0, $y = 0) 
    {
        $this-> x = $x;
        $this-> y = $y;
    }
    public function gauche($newY) 
    {
        
        $this->y = $newY;
        return "y = " . $this->y -= 1;
    }
    public function droite($newY) 
    {
        $this->y = $newY;
        return "y = " . $this->y += 1;
    }
    public function bas($newX) 
    {
        $this->x = $newX;
        return "x = " . $this->x -= 1;
    }
    public function haut($newX) 
    {
        $this->x = $newX;
        return "x = " . $this->x += 1;
    }
    public function position() 

    {
        echo "x est égale à: " . $this->x ."<br>" . "y est égale à: " . $this->y . "<br>";
    }
}