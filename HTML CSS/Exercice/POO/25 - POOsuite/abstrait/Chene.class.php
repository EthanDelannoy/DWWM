<?php

class Chene extends Plante{
    protected $couleur;

    public function __construct($nom, $type, $hauteur, $dureeDeVie, $famille, $couleur){
        parent::__construct($nom, $type, $hauteur, $dureeDeVie, $famille);
        $this->couleur = $couleur;
    }

    public function getCouleur(){ return $this->couleur; }

    public function setCouleur($couleur){ $this->couleur = $couleur; }


    public function afficher(){
        echo "Nom : $this->nom\n". "<br>";
        echo "Type : $this->type\n". "<br>";
        echo "Hauteur : $this->hauteur\n". "<br>";
        echo "Durée de vie : $this->dureeDeVie\n". "<br>";
        echo "Famille : $this->famille\n". "<br>";
        echo "Couleur : $this->couleur\n". "<br>";
        echo "***************************************<br>";
    }
}