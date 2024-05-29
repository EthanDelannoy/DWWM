<?php

$repertoire = [];

function PushTabl($nom, $numero) {
    global $repertoire;
    array_push($repertoire, [$nom, $numero]);
    echo "**********************************************\n";
    echo "Contact ajouté : $nom, $numero\n \n";
    echo "**********************************************\n";
}

function recherche($nom) {
    global $repertoire;
    foreach ($repertoire as $contact) {
        if ($contact[0] === $nom) {
            return $contact[1];
        }
    }
    return "Contact non trouvé \n";
}

function toutVoir() {
    global $repertoire;
    if (count($repertoire) === 0) {
        echo "**********************************\n";
        echo "Le répertoire est vide.\n";
        echo "**********************************\n";
    } else {
        foreach ($repertoire as $contact) {
            
            echo "\n".$contact[0] . " " . $contact[1]."\n";
            
        }
    }
}














do {
$choix1 = 1;
$choix2 = 2;
$choix3 = 3;

echo "Vous souhaitez :\n\n $choix1 : Ajouter un nouveau contact\n $choix2 : Recherchez un contact\n $choix3 : Rechercher Tout contact\n\n";

$choix = readline("Que voulez-vous faire ? ");

    switch ($choix) {
        case $choix1:
        $nom = readline("Entrez le prénom de la personne : ");
        $numero = readline("Entrez le numéro de téléphone : ");
        PushTabl($nom, $numero);
            break;
    
        case $choix2:
        $nomRecherche = readline("Entrez le prénom de la personne à rechercher : ");
        $resultatRecherche = recherche($nomRecherche);
        echo "**********************************************************************\n";
        echo $nomRecherche." a ce numéro : ". $resultatRecherche. "\n";
        echo "**********************************************************************\n";
        
            break;
    
        case $choix3:
        toutVoir();
            break;
    
        default:
            echo "Merci de saisir un choix valide !";
            break;
    }

    $choix = readline("Voulez-vous faire autre chose dans votre menu ? ");
} while ($choix == "Oui");

echo "Merci au revoir";





