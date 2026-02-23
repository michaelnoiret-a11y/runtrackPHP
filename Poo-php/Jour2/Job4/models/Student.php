<?php
Class Student {
    private $nom;
    private $prenom;
    private $numeroEtudiant;
    private $nombreDeCredit;
    private $level;

    public function __construct($nom, $prenom, $numeroEtudiant, $level, $nombreDeCredit = 0)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numeroEtudiant = $numeroEtudiant;
        $this->nombreDeCredit = $nombreDeCredit;
        $this->level = $level;
    }
    public function add_credits($credit)
    {
        if (!is_int($credit) || $credit <= 0) {
            echo "Le nombre de crédit doit être un entier positif . <br>";
            return $this->nombreDeCredit;
            
        }
            $this->nombreDeCredit += $credit;
            return $this->nombreDeCredit;
        }
    private function studentEval($nombreDeCredit)
    {
        if ($nombreDeCredit >= 90) {
            return "Excellent";
        }
        elseif ($nombreDeCredit >= 80) {
            return "Très bien";
        }
        elseif ($nombreDeCredit >= 70)
            {
                return "Bien";
            }
        elseif ($nombreDeCredit >= 60)
            {
                return "Passable";
            }
        else 
            {
                return "Insuffisant";
            } 
    }
    public function studentInfo()
    {
        return $this->nom . "<br>" . $this->prenom . "<br>" . $this->numeroEtudiant . "<br>" . $this->level;
    }
}