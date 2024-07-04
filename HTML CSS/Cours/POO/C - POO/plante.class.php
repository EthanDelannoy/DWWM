<?php

// Classe
class Plante{

    // Attribut
    // public $nom;
    // public $type;
    // public $hauteur;
    // public $dureeDeVie;
    // public $famille;

    private $nom;
    private $type;
    private $hauteur;
    private $dureeDeVie;
    private $famille;

    // Constructeur
    public function __construct($name, $type, $hauteur, $dureeDeVie, $famille){
        $this->nom = $name;
        $this->type = $type;
        $this->hauteur = $hauteur;
        $this->dureeDeVie = $dureeDeVie;
        $this->famille = $famille;

    }

    // Getter
    public function getNom(){return $this->nom;}
    public function getType(){return $this->type;}
    public function getHauteur(){return $this->hauteur;}
    public function getDureeDeVie(){return $this->dureeDeVie;}
    public function getFamille(){return $this->famille;}

    // Setter
    public function setNom($name){$this->nom = $name;}
    public function setType($type){$this->type = $type;}
    public function setHauteur($hauteur){$this->hauteur = $hauteur;}
    public function setDureeDeVie($dureeDeVie){$this->dureeDeVie = $dureeDeVie;}
    public function setFamille($famille){$this->famille = $famille;}
    
    // Méthode afficher les plantes
    public function affichage(){
        echo "Nom : $this->nom\n". "<br>";
        echo "Type : $this->type\n". "<br>";
        echo "Hauteur : $this->hauteur\n". "<br>";
        echo "Durée de vie : $this->dureeDeVie\n". "<br>";
        echo "Famille : $this->famille\n". "<br>";
        echo "***************************************<br>";
    }



}


































?>