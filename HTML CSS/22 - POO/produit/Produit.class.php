<?php

class Produit{

    public $nom;
    public $prix;
    public $quantite;

    public function __construct($nom,$prix, $quantite){
        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantite = $quantite;
    }

     // Getter
    public function getNom(){return $this->nom;}
    public function getPrix(){return $this->prix;}
    public function getQuantite(){return $this->quantite;}

     // Setter
    public function setNom($nom){$this->nom = $nom;}
    public function setPrix($prix){$this->prix = $prix;}
    public function setQuantite($quantite){$this->quantite = $quantite;}

    public function afficherProduit(){
    echo "Produit : $this->nom\n". "<br>";
    echo "Prix : $this->prix €\n". "<br>";
    echo "Quantité en stock : $this->quantite\n". "<br>";
    }

    public function mettreAJourPrix($nouveauPrix) {
        $this->prix = $nouveauPrix;
    }

    public function ajouterStock($nouveauStock) {
        $this->quantite += $nouveauStock;
    }

    public function vendreProduit($stockVendu) {
        if($this->quantite <= 0){
            echo "Nous n'avons plus d'article en stock, désolé !"."<br>";
        } elseif($stockVendu > $this->quantite) {
            echo "Quantité demandée dépasse le stock disponible. Nous avons seulement {$this->quantite} articles en stock."."<br>";
        } else {
            $this->quantite -= $stockVendu;
        }
    }



















}
















?>