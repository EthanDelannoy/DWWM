<?php

class Stagiaire{

private $nom;
public $notes;

public function __construct($nom,$notes){
    $this->nom = $nom;
    $this->notes = $notes;

}

 // Getter
 public function getNom(){return $this->nom;}
 public function getNotes(){return $this->notes;}

 // Setter
 public function setNom($nom){$this->nom = $nom;}
 public function setNotes($notes){$this->notes = $notes;}



public function calculerMoyenne() {
        $total = array_sum($this->notes);
        $nombreDeNotes = count($this->notes);
        return  $total / $nombreDeNotes;

}

public function trouverMax(){
    $valeurMax = max($this->notes);
    return $valeurMax;
}

public function trouverMin(){
    $valeurMin = min($this->notes);
    return $valeurMin;
}












}































?>