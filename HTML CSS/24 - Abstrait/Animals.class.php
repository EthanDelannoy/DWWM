<?php

abstract class Animals {
    protected $couleur;
    protected $nombrePatte;

    public function __construct($couleur, $nombrePatte) {
        $this->couleur = $couleur;
        $this->nombrePatte = $nombrePatte;
    }

    public function getCouleur() {
        return $this->couleur;
    }

    public function getPatte() {
        return $this->nombrePatte;
    }

    public function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

    public function setPatte($nombrePatte) {
        $this->nombrePatte = $nombrePatte;
    }

    abstract public function crier();
}