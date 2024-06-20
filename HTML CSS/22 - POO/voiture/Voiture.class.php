<?php

class Voiture{

    private $marque;
    private $modele;
    private $annee;
    private $couleur;
    public $vitesse = 0;

    // Constructeur
    public function __construct($marque,$modele,$annee,$couleur, $vitesse){
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->couleur = $couleur;
        $this->vitesse = floatval($vitesse);
    }

   // Getter
    public function getMarque(){return $this->marque;}
    public function getModele(){return $this->modele;}
    public function getAnnee(){return $this->annee;}
    public function getCouleur(){return $this->couleur;}
    public function getVitesse(){return $this->vitesse;}

    // Setter
    public function setMarque($marque){$this->marque = $marque;}
    public function setModele($modele){$this->modele = $modele;}
    public function setAnnee($annee){$this->annee = $annee;}
    public function setCouleur($couleur){$this->couleur = $couleur;}
    public function setVitesse($vitesse){$this->vitesse = $vitesse;}

    // Méthode afficher les voitures
    public function affichage(){
    echo "Marque : $this->marque\n". "<br>";
    echo "Modele : $this->modele\n". "<br>";
    echo "Année : $this->annee\n". "<br>";
    echo "Couleur : $this->couleur\n". "<br>";
    echo "Vitesse : $this->vitesse\n". "<br>";
    echo "***************************************<br>";
 }

 public function accelerer($valeur){
    $this->vitesse += floatval($valeur);
}

}



























?>