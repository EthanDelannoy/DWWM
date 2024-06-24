<?php
require_once "Lapin.class.php";
require_once "Chasseur.class.php";


$lapinBlanc = new Lapin("blanc", 4, true);
$chasseurPaul = new Chasseur("Paul", "fusil");

echo "Le lapin {$lapinBlanc->getCouleur()} à {$lapinBlanc->getPatte()} pattes a été créé.<br>";
echo "Le chasseur {$chasseurPaul->getNom()} a été créé avec un {$chasseurPaul->getArme()}.<br>";

$lapinBlanc->seNourrir();

while ($lapinBlanc->estVivant()) {
    $chasseurPaul->seDeplacer();
    $lapinBlanc->crier();
    $chasseurPaul->chasser($lapinBlanc);

    if ($lapinBlanc->estVivant()) {
        $lapinBlanc->fuir();
    }
}