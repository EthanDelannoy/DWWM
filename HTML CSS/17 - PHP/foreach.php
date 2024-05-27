<?php

// EXERCICE 1 ----------------------------------

// $tab = [];
// $somme = 0;

// for ($i = 0; $i < 9; $i++) { 
//     $tab[] = readline("Entrez un nombre : ");
// }

// foreach ($tab as $value) {
//     $somme += $value; 
// }

// $moyenne = $somme / count($tab); 

// echo "La moyenne est de : " . $moyenne . "\n";


// EXERCICE 2 ----------------------------------

// $tab = [];
// $longueur = readline("Entrez le nombre de valeurs : ");

// for ($i = 0; $i < $longueur; $i++) { 
//     $tab[] = readline("Entrez un nombre : ");
// }

// $positif = 0;
// $negatif = 0;

// foreach ($tab as $value) {
//     if ($value > 0) {
//         $positif++;
//     } elseif ($value < 0) {
//         $negatif++;
//     }
// }

// echo "Nombre de valeurs positives : " . $positif . "\n";
// echo "Nombre de valeurs négatives : " . $negatif . "\n";

// EXERCICE 3 ----------------------------------

// $tab = [1, 8, 3, 4, 5];
// $total = 0;

// for ($i = 0; $i < count($tab); $i++) { 
//      $total += $tab[$i];
// }

// echo "Total : " . $total;

// EXERCICE 4 ----------------------------------

// $tab = [4, 8, 7, 9, 1, 5, 4, 6];
// $tab2 = [7, 6, 5, 2, 1, 3, 7, 4];
// $tab3 = [];

// for ($i = 0; $i < count($tab); $i++) { 
//     $tab3[$i] = $tab[$i] + $tab2[$i];
// }

// foreach ($tab3 as $value) {
//     echo $value. " ";
// }

// EXERCICE 5 ----------------------------------

// $tab = [];
// $longueur = readline("Entrez le nombre de valeurs : ");

// for ($i = 0; $i < $longueur; $i++) {
//     $nbre = readline("Entrez une valeur : ");
//     $tab[] = $nbre;
// }

// $valeurMax = null;
// $position = 0;

// foreach ($tab as $index => $value) {
//     if ($valeurMax === null || $value > $valeurMax) {
//         $valeurMax = $value;
//         $position = $index;
//     }
// }
// echo "La plus grande valeur est $valeurMax à la position " . ($position + 1) . ".\n";

// EXERCICE 6 ----------------------------------

// $tab = [];
// $longueur = readline("Combien de notes y a-t-il ? ");

// for ($i = 0; $i < $longueur; $i++) {
//     $nbre = readline("Rentrez une note : ");
//     $tab[] = $nbre; 
// }

// $somme = 0;
// foreach ($tab as $note) {
//     $somme += $note;
// }

// $moyenne = $somme / $longueur;
// echo "La moyenne de classe est : " . $moyenne . "\n";

// echo "Les notes supérieures à la moyenne sont : ";
// foreach ($tab as $note) {
//     if ($note > $moyenne) {
//         echo $note." ";
//     }
// }

// EXERCICE 7 ----------------------------------

// $prix = [5, 50, 23, 11];
// $quantite = [10, 1, 4, 3];  
// $tab3 = [];

// for ($i = 0; $i < count($prix); $i++) {
//     $tab3[] = $prix[$i] * $quantite[$i]; 
// }

// foreach ($tab3 as $value) {
//     $value;
// }

// $total = array_sum($tab3);
// echo "La somme totale est : " . $total;


