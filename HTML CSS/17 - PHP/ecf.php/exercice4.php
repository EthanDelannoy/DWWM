<?php

// Fonction pour le tableau avec pierre feuille ciseau et un array_rand pour que l'ordinateur choissi aléatoirement
        function choixOrdinateur() {
            return ['Pierre', 'Feuille', 'Ciseaux'][array_rand(['Pierre', 'Feuille', 'Ciseaux'])];
        }
        // Fonction pour indiqué le nom et déclarer les variable qui vont servir à compté le nombre de manche gagné
        function nomManche() {
            $nom = readline("Indiquez votre nom : ");
            $mancheJoueur = 0;
            $mancheOrdi = 0;
        
            // Boucle pour pouvoir jouer autant qu'on veux
            do {
                // Menu
                echo "1. Jouer une manche\n";
                echo "2. Quitter\n";
                $choixMenu = readline("Choissisez entre les options :");
        
                if ($choixMenu == "1") {
                    // Boucle pour qu'il choissie obligatoirement entre pierre, feuille, ciseaux et rien d'autre
                    do {
                        $joueur = readline("Choisissez entre pierre, feuille et ciseaux : ");
                        if (!in_array($joueur, ['pierre', 'feuille', 'ciseaux'])) {
                            echo "Choix invalide.\n";
                        }
                    } while (!in_array($joueur, ['pierre', 'feuille', 'ciseaux']));
                    
                    // Affichage des résultat entre joueur qui gagne, ordinateur qui gagne ou égalité
                    $ordinateur = choixOrdinateur();
                    echo "Vous avez choisi : $joueur\n";
                    echo "L'ordinateur a choisi : $ordinateur\n";
                    if ($joueur == $ordinateur) {
                        $gagnant = "Égalité";
                    } else {
                        if (($joueur == "Pierre" && $ordinateur == "Ciseaux") || 
                            ($joueur == "Feuille" && $ordinateur == "Pierre") || 
                            ($joueur == "Ciseaux" && $ordinateur == "Feuille")) {
                            $gagnant = "Joueur";
                        } else {
                            $gagnant = "Ordinateur";
                        }
                    }
                    echo "Résultat : ";
                    if ($gagnant == "Égalité") {
                        echo "Égalité\n";
                        // Incrémentation de 1 à chaque manche gagné pour le joueur ou l'ordinateur
                    } elseif ($gagnant == "Joueur") {
                        echo "Vous gagnez !\n";
                        $mancheJoueur++;
                    } else {
                        echo "L'ordinateur gagne !\n";
                        $mancheOrdi++;
                    }
                    // Si le joueur séléctionne quitté alors il ca affichera le nombre de manché que il a gagné et que l'ordinateur à gagné
                } elseif ($choixMenu == "2") {
                    echo "Nombre de manches gagnées par $nom : $mancheJoueur\n";
                    echo "Nombre de manches gagnées par l'ordinateur : $mancheOrdi\n";
                    break;
                    // Si dans le menu il sélectionne autre chose que le choix 1 ou 2
                } else {
                    echo "Choix invalide. Veuillez choisir une option valide.\n";
                }
                // Boucle pour continuer à jouer
            } while ($choixMenu == "1");
        }
        
        // Rappel de fonction pour que tout s'affiche
        nomManche();




