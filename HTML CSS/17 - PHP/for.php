<?php

// EXERCICE 1 -----------------------------------------------------
// $table = readline("Sélectionnez une table de multiplication : ");

function table($table) {
    $results = array(); 
    for ($i = 1; $i <= 10; $i++) {
        $results[] = $i . "x" . $table . "=" . ($i * $table); 
    }
    return $results; 
}

// EXERCICE 2 -----------------------------------------------------

// $nbre = readline("Entrez un nombre : ");
// $nbreFin = $nbre-5;
// echo "Les 5 nombres précédents sont :"."\n";
// for ($i=$nbre; $i > $nbreFin; $i--) { 
//     echo $i-1 . " "."\n";
// }

// echo "\n**********************************\n\n";

// $nbreFin = $nbre+4;
// echo "Les 5 nombres suivants sont :"."\n";
// for ($i=$nbre; $i <= $nbreFin; $i++) { 
//     echo $i+1 ." "."\n";
// }

// EXERCICE 3 -----------------------------------------------------

// $nbre = readline("Entrez un nombre : ");

function factorielle($nbre){
$resultat = 1;

    for ($i = 1; $i <= $nbre; $i++) {
        $resultat *= $i;
    }

return $resultat;
}

// EXERCICE 4 -----------------------------------------------------

// $min = readline("Entrez un nombre : ");
// $max = $min; 

// for ($i = 2; $i <= 5; $i++) {
//     $nbre = readline("Entrez un nombre : ");

//     if ($nbre < $min) {
//         $min = $nbre;
//     }elseif ($nbre > $max) {
//         $max = $nbre;
//     }
// }

// echo "Le plus grand nombre est : $max\n";
// echo "Le plus petit nombre est : $min";
