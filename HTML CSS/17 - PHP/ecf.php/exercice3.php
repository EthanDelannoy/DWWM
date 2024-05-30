<?php
require('fonctions.php');

// 1.--------------------
// Tableau des notes
$tabNotes = [
    "Akali" => [20],
    "Zed" => [18]
];

// Le programme principal
do {

    $choix1 = 1;
    $choix2 = 2;
    $choix3 = 3;
    $choix4 = 4;
    $choix5 = 5;
    $choix6 = 6;
    $choix7 = 7;
    $choix8 = 8;

    echo "Menu:\n $choix1. Avoir les notes de l'éleve désigné\n $choix2. Ajouter une nouvelle note à des éleves\n $choix3. Supprimer un éleve et ses notes\n $choix4. Calculez la moyenne de toute la classe\n $choix5. Avoir la note la plus élevée et la plus basse\n $choix6. Afficher les éleves au dessus de la moyenne générale\n $choix7. Trier les élèves par leur moyenne de notes en ordre décroissant\n $choix8. Afficher tout les éleves et leurs notes\n";

    do {
        $choix = readline("Entrez le numéro du programme que vous voulez : ");
        if (!is_numeric($choix) || !in_array($choix, [$choix1, $choix2, $choix3, $choix4, $choix5, $choix6, $choix7, $choix8])) {
            echo "Choix invalide.\n";
        }
    } while (!is_numeric($choix) || !in_array($choix, [$choix1, $choix2, $choix3, $choix4, $choix5, $choix6, $choix7, $choix8]));


    switch ($choix) {
        case $choix1:
                    // do while avec un if pour que la condition soit qu'il doit mettre rien d'autre qu'un chiffre
            do {
                $nbrEleve = readline("Combien d'élèves y a-t-il dans la classe ? ");
                if (!is_numeric($nbrEleve)) {
                    echo "Veuillez mettre un chiffre !\n";
                }
            } while (!is_numeric($nbrEleve));

            // Boucle for pour mettre les notes au nombre d'éléve que l'on souhaite. Si le nom mis dans $nomEleve existe dans mon tableau alors il me dit que l'éleve a ça comme note avec un implode pour mettre en chaine de caractère. Sinon l'élève n'est pas dans la liste

            for ($i = 0; $i < $nbrEleve; $i++) {
                $nomEleve = readline("Quel est le nom de l'élève ? ");
                if (array_key_exists($nomEleve, $tabNotes)) {
                    echo $nomEleve . " a les notes suivantes : " . implode("/20, ", $tabNotes[$nomEleve]) . "/20\n";
                } else {
                    echo "L'élève " . $nomEleve . " n'existe pas dans la liste.\n";
                }
            }
            break;

        case $choix2:
            // Le programme demande le nom de l'élève pour ajouter une nouvelle note
            
        // do while avec un if pour que la condition soit qu'il doit mettre rien d'autre que des lettres
            do {
                $nomEleve = readline("À qui doit-on ajouter cette note ? ");
                if (is_numeric($nomEleve)) {
                    echo "Veuillez mettre un nom !\n";
                }
            } while (is_numeric($nomEleve));

        // do while avec un if pour que la condition soit qu'il doit mettre rien d'autre qu'un chiffre
            do {
                $nouvelleNote = readline("Entrez la nouvelle note : ");
                if (!is_numeric($nouvelleNote)) {
                    echo "Veuillez mettre un chiffre !\n";
                }
            } while (!is_numeric($nouvelleNote));


            // Vérifie que la note est comprise entre 0 et 20, si c'est le cas, il ajoute la note dans le tableau sur le $nomEleve
            if ($nouvelleNote < 0 || $nouvelleNote > 20) {
                echo "La note doit être comprise entre 0 et 20 !\n";
            } else {
                ajouterNote($tabNotes, $nomEleve, $nouvelleNote);
            }

            break;

        case $choix3:
            // Regarde si le clef saisi dans $nomEleveASupprimer existe, si oui il le supprime dans le tableau sinon, dit qu'il n'existe pas 
            
            // do while avec un if pour que la condition soit qu'il doit mettre rien d'autre que des lettres
            do {
                $nomEleveASupprimer = readline("Quel élève voulez-vous supprimer ? ");
                if (is_numeric($nomEleveASupprimer)) {
                    echo "Veuillez mettre un nom !\n";
                }
            } while (is_numeric($nomEleveASupprimer));


            if (array_key_exists($nomEleveASupprimer, $tabNotes)) {
                unset($tabNotes[$nomEleveASupprimer]);
                echo "L'élève $nomEleveASupprimer a été supprimé\n";
            } else {
                echo "L'élève $nomEleveASupprimer n'existe pas dans la liste.\n";
            }
            break;

            case $choix4:
                // Je déclare somme et nombreNotes à 0 pour m'en servir plus tard. Je fait un foreach dans un foreach pour accèdez à mes notes dans le tableau, je fais le calcul de la somme de toute les notes puis en dehors de la boucle je fais mon calcul de moyenne et je l'affiche
                $somme = 0;
                $nombreNotes = 0; 

                moyenne($somme,$nombreNotes,$tabNotes);
                
                break;
                case $choix5:
                    // je déclare ma variable noteMax et nomeleveMax pour m'en servir plus tard. Je fais un foreach dans un foreach pour accédez au notes de mon tableau. Si ma noteMax est null ou que ma note est supérieur a ma noteMax alors note deviens noteMax. Le nomEleve deviens nomEleveMax et j'affiche le $nomEleveMax et noteMax

                    $noteMax = null;
                    $nomEleveMax = null;
                    
                    foreach ($tabNotes as $nomEleve => $notes) {
                        foreach ($notes as $note) {
                            if ($noteMax === null || $note > $noteMax) {
                                $noteMax = $note;
                                $nomEleveMax = $nomEleve;
                            }
                        }
                    }
                    
                    echo "La note la plus élevée est : $nomEleveMax $noteMax\n";

                     // je déclare ma variable noteMin et nomEleveMin pour m'en servir plus tard. Je fais un foreach dans un foreach pour accédez au notes de mon tableau. Si ma noteMin est null ou que ma note est inférieur a ma noteMin alors note deviens noteMin. Le nomEleve deviens nomEleveMin et j'affiche le $nomEleveMin et noteMin
                    $noteMin = null;
                    $nomEleveMin = null;
                    
                    foreach ($tabNotes as $nomEleve => $notes) {
                        foreach ($notes as $note) {
                            if ($noteMin === null || $note < $noteMin) {
                                $noteMin = $note;
                                $nomEleveMin = $nomEleve;
                            }
                        }
                    }
                    
                    echo "La note la plus élevée est : $nomEleveMin $noteMin\n";
                    break;

                    case $choix6:
                        // Je recalcule la moyenne au lieu de prendre la fonction car $moyenne n'est pas déclaré sinon
                        $somme = 0;
                        $nombreNotes = 0; 
                        
                    
                        foreach ($tabNotes as $nomEleve => $notes) {
                            foreach ($notes as $note) {
                                $somme += $note;
                                $nombreNotes++;
                            }
                        }
                            $moyenne = $somme / $nombreNotes;
                            echo "La moyenne est de : " . $moyenne . "\n";

                            // Je fais un écho avant la boucle pour qu'il s'affiche 1 fois. Je fais un foreach dans un foreach pour accèdez au note de mon tableau. Je lui dis que si les notes sont supérieur à la moyenne alors affiche les notes et le nom de l'éleve qui a cette note.

                            echo "Les notes supérieures à la moyenne sont : \n";
                            foreach ($tabNotes as $nomEleve => $notes) {
                                foreach ($notes as $note) {
                                    if ($note > $moyenne) {
                                        echo "$nomEleve : $note\n";
                                    }
                                }
                            }

                        break;

                        case $choix7:
                            // Arsort de mon tableau pour ranger en ordre décroissant, foreach pour parcourir mon tableau, j'affiche ma key donc les nom et l'implode(pour mettre en chaine de caractère) de ma values donc les notes.

                            arsort($tabNotes);

                            foreach ($tabNotes as $key => $value) {
                                echo "$key = " . implode(", ", $value) . "\n";
                            }
                        break;

                        case $choix8:
                            // Foreach pour lire tout le tableau et un deuxieme foreach pour lire toutes les notes
                            foreach ($tabNotes as $key => $values) { 
                                foreach ($values as $value) {
                                    echo $key . " " . $value . "\n"; 
                                }
                            }

                        break;

        default:
            echo "Choix invalide";
            break;
    }
    do {
        $recommence = readline("Voulez-vous faire autre chose dans le menu ? (oui/quitter) : ");
        $recommence = strtolower($recommence);

        if ($recommence != "oui" && $recommence != "quitter") {
            echo "Entrez une réponse valide.\n";
        }
    } while ($recommence != 'oui' && $recommence != 'quitter');
} while ($recommence == "oui");

echo "Au revoir";
