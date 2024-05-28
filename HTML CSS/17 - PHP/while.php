<?php

// EXERCICE 1 ---------------------------------------

// $nbre = readline("Veuillez entrer un nombre entre 1 et 3 : ");

// while ($nbre <= 1 || $nbre >= 3) {
//     $nbre = readline("Veuillez entrer un nombre entre 1 et 3 : ");
// }

// echo "Bravo";


// EXERCICE 2 ---------------------------------------


// $nbre = readline("Veuillez entrer un nombre entre 10 et 20 :");

// while ($nbre <= 10 || $nbre >= 20) {
//     if($nbre <= 10){
//         $nbre = readline("Le nombre choisi est trop petit, Veuillez entrer un nombre entre 10 et 20 : ");
//     }elseif($nbre >= 20){
//         $nbre = readline("Le nombre choisi est trop grand, Veuillez entrer un nombre entre 10 et 20 : ");
//     }
// }

// echo "Bravo.";


// EXERCICE 3 ---------------------------------------

// $nbre = readline("Choissiez un nombre : ");
// $nombreFin = $nbre-1 +10;

// while ($nbre <= $nombreFin){
//     $nbre++;
//     echo $nbre ." ";
// }

// EXERCICE 4 ---------------------------------------

// $nbre1 = readline("Choissiez un 1er nombre : ");
// $nbre2 = readline("Choissiez un 2eme nombre : ");

function pgcd($nbre, $nbre2) {
    while ($nbre2 != 0) {
        $nbre3 = $nbre2;
        $nbre2 = $nbre % $nbre2;
        $nbre = $nbre3;
    }
    return $nbre;
}

// echo pgcd($nbre, $nbre2);


// EXERCICE 5 ---------------------------------------


// $nbre = readline("Choissiez un 1er nombre : ");
// $nbre2 = readline("Choissiez un 2ème nombre : ");


// function gcd1($nbre, $nbre2 ) {

//     while ($nbre2 != 0) {
//         $nbre3  = $nbre2 ;
//         $nbre2 = $nbre % $nbre2 ;
//         $nbre = $nbre3 ;
//     }

//     return $nbre;
// }

// function ppcm($nbre, $nbre2) {
//     $pgcd = gcd1($nbre, $nbre2);
    
//     $ppcm = ($nbre * $nbre2) / $pgcd;
    
//     return $ppcm;
// }

// echo ppcm($nbre, $nbre2);
