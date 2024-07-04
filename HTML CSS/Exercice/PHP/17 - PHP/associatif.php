<?php
 
// EXERCICE 1.1 -------------------------------------------

//  $chomage = array('Autriche' => 4.9,
//                   'Allemagne' => 9.3,
//                   'Danemark' => 4.8,
//                   'Espagne' => 9.4,
//                   'France' => 9.7);

// foreach ($chomage as $key => $value) {
//     echo $key." ". $value ."\n";
// }

// EXERCICE 1.2 -------------------------------------------

//  $chomage = array('Autriche' => 4.9,
//                   'Allemagne' => 9.3,
//                   'Danemark' => 4.8,
//                   'Espagne' => 9.4,
//                   'France' => 9.7);

// foreach ($chomage as $key => $value) {
//     if ($value < 5) {
//         echo $key." ". $value ."\n";
//     }
// };

// EXERCICE 1.3 -------------------------------------------

// $chomage = array(
//     'Autriche' => 4.9,
//     'Allemagne' => 9.3,
//     'Danemark' => 4.8,
//     'Espagne' => 9.4,
//     'France' => 9.7
// );

// $valeursMini = min($chomage); 

// foreach ($chomage as $key => $value) {
//     if ($value == $valeursMini) { 
//         echo $key." ". $value; 
//     }
// }

// EXERCICE 2.1 -------------------------------------------

// $tabNotes = array(
//     'Boucher' => 16,
//     'Bourdette' => 13,
//     'Brieux' => 11,
//     'Bigou' => 9,
//     'Boulette' => 3,
//     'Chorizo' => 6
// );

// foreach ($tabNotes as $key => $value) {
//     echo $key." ".$value ."\n";
// }

// EXERCICE 2.2 -------------------------------------------

// $tabNotes = array(
//     'boucher' => 16,
//     'bourdette' => 13,
//     'brieux' => 11,
//     'bigou' => 9,
//     'boulette' => 3,
//     'chorizo' => 6
// );

// $somme = 0;
// foreach ($tabNotes as $note) {
//     $somme += $note;
// }

// $moyenne = $somme / count($tabNotes);

// echo "La moyenne est de : ".$moyenne;

// EXERCICE 3.1 -------------------------------------------

//   $tabNotes = array(
//     'prenot' => array(2,10,14),
//     'perthuis' => array(20,18,12),
//     'akali' => array(8,15,12),
//     'gragas' => array(3,5,1),
//     'rammus' => array(12,13,11),
//     'shaco' => array(10,18,6),
// );

// foreach ($tabNotes as $key => $value) {
//     echo $key . ": ";
//     foreach ($value as $note) {
//         echo $note. " ";
//     }
//     echo "\n";
// }

// EXERCICE 3.2 -------------------------------------------

// $tabNotes = array(
//     'Prenot' => array(2, 10, 14),
//     'Perthuis' => array(20, 18, 12),
//     'Akali' => array(8, 15, 12),
//     'Gragas' => array(3, 5, 1),
//     'Rammus' => array(12, 13, 11),
//     'Shaco' => array(10, 18, 6),
// );

// foreach ($tabNotes as $key => $value) {
//     $somme = array_sum($value); 
//     $moyenne = $somme / count($value); 
//     $moyenne = round($moyenne, 2);
//     echo $key." "."a une moyenne de : " . $moyenne . "\n"; 
// }

// EXERCICE 3.3 -------------------------------------------

// $nom = readline('Vous voulez la moyenne de quel élève ? ');

// $tabNotes = array(
//     'Prenot' => array(2, 10, 14),
//     'Perthuis' => array(20, 18, 12),
//     'Akali' => array(8, 15, 12),
//     'Gragas' => array(3, 5, 1),
//     'Rammus' => array(12, 13, 11),
//     'Shaco' => array(10, 18, 6),
// );

// $keyExist = 0;
// foreach ($tabNotes as $key => $value) {
//     if ($nom == $key) {
//         $keyExist = 1;
//         $somme = array_sum($value);
//         $moyenne = $somme / count($value);
//         echo $key . " a une moyenne de : " . $moyenne . "\n";
//     }
// }
// if ($keyExist == 0) {
//     echo "Veuillez mettre un nom qui est répertorié !";
// }

// EXERCICE 3.4 -------------------------------------------

// $choix1 = 1;
// $choix2 = 2;
// $choix3 = 3;

// do {
//     echo "*************************************************\n";
//     echo "$choix1 : Afficher le nom et les notes de chaque élève." . "\n" . "$choix2 : Afficher le nom et la moyenne de chaque élève" . "\n" . "$choix3 : Afficher les notes et la moyenne d'un élève" . "\n";
//     echo "*************************************************\n";

//     $choix = readline('Que voulez-vous faire ? ');

//     switch ($choix) {
//         case $choix1:
//             echo "************************\n";
//             $tabNotes = array(
//                 'Prenot' => array(2, 10, 14),
//                 'Perthuis' => array(20, 18, 12),
//                 'Akali' => array(8, 15, 12),
//                 'Gragas' => array(3, 5, 1),
//                 'Rammus' => array(12, 13, 11),
//                 'Shaco' => array(10, 18, 6),
//             );
//             foreach ($tabNotes as $key => $value) {
//                 echo $key . ": ";
//                 foreach ($value as $note) {
//                     echo $note . " ";
//                 }
//                 echo "\n";
//             }
//             echo "************************\n";
//             break;
//         case $choix2:
//             echo "*********************************************\n";
//             $tabNotes = array(
//                 'Prenot' => array(2, 10, 14),
//                 'Perthuis' => array(20, 18, 12),
//                 'Akali' => array(8, 15, 12),
//                 'Gragas' => array(3, 5, 1),
//                 'Rammus' => array(12, 13, 11),
//                 'Shaco' => array(10, 18, 6),
//             );
            
//             foreach ($tabNotes as $key => $value) {
//                 $somme = array_sum($value); 
//                 $moyenne = $somme / count($value); 
//                 $moyenne = round($moyenne, 2);
//                 echo $key." "."a une moyenne de : " . $moyenne . "\n"; 
//             }
//              echo "*********************************************\n";
//             break;
//         case $choix3:
//             echo "*********************************************\n";
//             $nom = readline('Vous voulez la moyenne de quel élève ? ');
//             echo "\n";
//             $tabNotes = array(
//                 'Prenot' => array(2, 10, 14),
//                 'Perthuis' => array(20, 18, 12),
//                 'Akali' => array(8, 15, 12),
//                 'Gragas' => array(3, 5, 1),
//                 'Rammus' => array(12, 13, 11),
//                 'Shaco' => array(10, 18, 6),
//             );
            
//             $keyExist = 0;
//             foreach ($tabNotes as $key => $value) {
//                 if ($nom == $key) {
//                     $keyExist = 1;
//                     $somme = array_sum($value);
//                     $moyenne = $somme / count($value);
//                     echo $key . " a une moyenne de : " . $moyenne . "\n";
//                 }
//             }
//             if ($keyExist == 0) {
//                 echo "Veuillez mettre un nom qui est répertorié !";
//             }echo "*************************************************\n";
//             break;
//         default:
//             echo "Veuillez saisir un des choix svp !\n";
//             echo "*************************************************\n";
//             break;
//     }

//     $reponse = readline('Voulez-vous recommencer ?  ');

// } while ($reponse == "oui" || $reponse == "yes" || $reponse == "y" || $reponse == "Oui"|| $reponse == "Yes" || $reponse == "Y");

// echo "Merci d'avoir utilisé le programme !\n";

