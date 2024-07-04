<?php
require_once "Humain.class.php";
require_once "interface.php";

class Chasseur extends Humain implements Deplacable {
    protected $arme;

    public function __construct($nom, $arme) {
        parent::__construct($nom);
        $this->arme = $arme;
    }

    public function getArme() {
        return $this->arme;
    }

    public function chasser(Lapin $lapin) {
        echo "$this->nom tire sur le lapin avec son $this->arme et... ";
        if ($lapin->estTouche()) {
            echo "le touche.<br>";
            $lapin->mourir();
        } else {
            echo "le rate.<br>";
        }
    }

    public function seDeplacer() {
        echo "$this->nom avance avec son $this->arme.<br>";
    }
}