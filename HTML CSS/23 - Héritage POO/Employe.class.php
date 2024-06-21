<?php

class Employe {
    public $nom;
    public $salaire;

    public function __construct($nom, $salaire) {
        $this->nom = $nom;
        $this->salaire = $salaire;
    }

    public function afficherDetails() {
        echo "$this->nom<br>";
        echo "$this->salaire €<br>";
    }
}