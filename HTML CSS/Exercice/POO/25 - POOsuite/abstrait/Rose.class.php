<?php

class Rose extends Plante{
    protected $couleur;
    protected $epines;

    public function __construct($nom, $type, $hauteur, $dureeDeVie, $famille, $couleur, $epines){
        parent::__construct($nom, $type, $hauteur, $dureeDeVie, $famille);
        $this->couleur = $couleur;
        $this->epines = $epines;
    }

    public function getCouleur(){ return $this->couleur; }
    public function getEpines(){ return $this->epines; }

    public function setCouleur($couleur){ $this->couleur = $couleur; }
    public function setEpines($epines){ $this->epines = $epines; }


    public function afficher(){
        echo "Nom : $this->nom\n". "<br>";
        echo "Type : $this->type\n". "<br>";
        echo "Hauteur : $this->hauteur\n". "<br>";
        echo "Durée de vie : $this->dureeDeVie\n". "<br>";
        echo "Famille : $this->famille\n". "<br>";
        echo "Couleur : $this->couleur\n". "<br>";
        echo "Épines : $this->epines\n". "<br>";
        echo "***************************************<br>";
    }
}