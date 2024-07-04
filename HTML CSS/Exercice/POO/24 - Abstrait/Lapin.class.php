<?php
require_once "Animals.class.php";

class Lapin extends Animals {
    protected $enVie;

    public function __construct($couleur, $nombrePatte, $enVie) {
        parent::__construct($couleur, $nombrePatte);
        $this->enVie = $enVie;
    }

    public function seNourrir() {
        echo "Le lapin $this->couleur se nourrit.<br>";
    }

    public function fuir() {
        $this->seDeplacer();
        echo "Le lapin $this->couleur s'enfuit sur ses $this->nombrePatte d'un seul bond !<br>";
    }

    public function crier() {
        echo "Le lapin $this->couleur crie..<br>";
    }

    public function estVivant() {
        return $this->enVie;
    }

    public function estTouche() {

        $resultat = rand(1, 6);
        return $resultat === 1 || $resultat === 6;
    }

    public function mourir() {
        $this->enVie = false;
        echo "Le pauvre petit lapin $this->couleur est malheureusement mort.<br>";
    }

    public function seDeplacer() {
        echo "Le petit lapin $this->couleur avance avec ses pattes.<br>";
    }

}