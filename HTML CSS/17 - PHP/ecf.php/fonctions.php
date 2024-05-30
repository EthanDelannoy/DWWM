<?php


// EXERCICE 2 ----------------------------------------

// Fonction addition
function addition($nbre1, $nbre2){
    $somme = $nbre1 + $nbre2;
    return $somme;
}

// Fonction soustraction
function soustraction($nbre1, $nbre2){
    $somme = $nbre1 - $nbre2;
    return $somme;
}


// Fonction multiplication
function multiplication($nbre1, $nbre2){
    $somme = $nbre1 * $nbre2;
    return $somme;
}

// Fonction division
function division($nbre1, $nbre2){
    $somme = $nbre1 / $nbre2;
    return $somme;
}

// EXERCICE 3 ----------------------------------------

// Fonction pour ajouter des notes
function ajouterNote(&$tabNotes, $nomEleve, $nouvelleNote) {
    if (!array_key_exists($nomEleve, $tabNotes)) {
        $tabNotes[$nomEleve] = [];
    }
    $tabNotes[$nomEleve][] = $nouvelleNote;
}

// Calcul de moyenne

function moyenne($somme,$nombreNotes,$tabNotes){
$somme = 0;
$nombreNotes = 0; 

foreach ($tabNotes as $notes) {
    foreach ($notes as $note) {
        $somme += $note;
        $nombreNotes++;
    }
}
    $moyenne = $somme / $nombreNotes;
    echo "La moyenne est de : " . $moyenne . "\n";}
