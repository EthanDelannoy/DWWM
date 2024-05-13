<?php

//------------------------------------------------------------------- EXERCICE 1 --------------------------------------------------

// $nbre = readline("Insérez un nombre : ");
// echo pow($nbre, 2);


// $prenom = readline("Insérez votre prénom : ");
// echo "Bonjour " . $prenom;


// $prixHT = "20€ ";
// $article = 5;
// $tva = "20% ";
// $prixTTC = "25€";

// $operation = (25/20) * 20;
// $total = $article * $operation;

// echo "Prix Hors taxe : " .$prixHT ."TVA : ".$tva."Prix TTC : " .$operation,"€". " " ."Nombre d'article disponible : " .$article." ". "Prix total pour touts les articles : ". $total,"€";


// --------------------------------------------------------------------------EXERCICE 2-----------------------------------------

// $nbre = readline("Veuillez mettre un nombre : ");

// if ($nbre > 0) {
//     echo "Votre nombre est positif";
// } elseif ($nbre < 0) {
//     echo "Votre nombre est négatif";
// }else{
//    echo "Votre nombre n'est pas reconnu, veillez réessayez";
// }



// $nbre1 = readline("Sélctionnez votre 1er nombre : ");
// $nbre2 = readline("Sélctionnez votre 2ème nombre : ");

// if (($nbre1 < 0 && $nbre2  > 0) || ($nbre1 > 0 && $nbre2  < 0)) {
//     echo "Le produit est négatif.";
// } else {
//     echo "Le produit est positif.";
// }




// $nbre = readline("Sélctionnez un nombre : ");

// if ($nbre > 0) {
//     echo "Votre nombre est positif";
// } elseif ($nbre < 0) {
//     echo "Votre nombre est négatif";
// }elseif($nbre == 0){
//     echo "Votre nombre est ni positif, ni négatif";
// }else{
//    echo "Veuillez bien indiqué un nombre !";
// }




// $nbre1 = readline("Sélctionnez votre 1er nombre : ");
// $nbre2 = readline("Sélctionnez votre 2ème nombre : ");

// if ($nbre1 == 0 || $nbre2  == 0) {
//     echo "Le produit est nul.";
// } else {
    
//     if (($nbre1 < 0 && $nbre2  > 0) || ($nbre1 > 0 && $nbre2  < 0)) {
//         echo "Le produit est négatif.";
//     } else {
//         echo "Le produit est positif.";
//     }
// }


// $age = readline("Rentrez votre âge : ");

// switch ($age) {
//     case ($age >= 6 && $age <= 7):
//         echo "Poussin";
//     break;
//     case ($age >= 8 && $age <= 9):
//          echo "Pupille";
//     break;
//     case ($age >= 10 && $age <= 11):
//         echo "Minime";
//     break;   
//     case ($age >= 12):
//         echo "Cadet";
//     break;     
//         default:
//             echo "Vous êtes trop petit";
//             break;
//     }



// $heure = readline("Sélectionnez l'heure : ");
// $minute = readline("Sélectionnez les minutes : ");


// if ($heure == 23 && $minute == 59) {
//     $heure = 00;
//     $minute = 00;
// } elseif ($minute == 59) {
//     $heure += 1;
//     $minute = 00;
// } else {
//     $minute += 1;
// }


// echo "Dans une minute, il sera : ". $heure,"h" .$minute;


// $heure = readline("Sélectionnez l'heure : ");
// $minute = readline("Sélectionnez les minutes : ");
// $seconde = readline("Sélectionnez les secondes : ");


// $seconde += 1;

// if ($seconde == 60) {
//     $seconde = 0;
//     $minute += 1;
// }

// if ($minute == 60) {
//     $minute = 0;
//     $heure += 1;
// }

// if ($heure == 24) {
//     $heure = 0;
// }

// echo "Dans une seconde, il sera : ".$heure,"h". " ". $minute,"minutes"." ". "et"." ". $seconde,"seconde";


// $copie = readline("Combien de reprograpgie voulez-vous ?");

// switch ($copie) {
//     case ($copie <= 10):
//         echo "Le prix sera de 0.10€";
//     break;
//     case ($copie <= 20):
//         echo "Le prix sera de 0.09€";
//     break;
//     case ($copie >= 30 || $copie <= 30):
//         echo "Le prix sera de 0.08€";
//     break;
//     }


// $sexe = readline("Indiquez votre sexe : ");
// $age = readline("Indiquez votre age : ");

// if($sexe == "Homme" && $age >= 20){
//     echo "Vous êtes imposable";
// }elseif($sexe == "Femme" && $age >=18 && $age <=35 ){
//     echo "Vous êtes imposable";
// }else{
//     echo "Vous ne payez pas d'impots !";
// }

// $num = readline("Indique un mois de l'année : ");
// $annee = readline("Indique une année : ");
// switch ($num) {
//     case "Janvier":
//         echo $nbrDeJours = 31;
//         break;
//     case "Février":
//         if (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0) { 
//             echo $nbrDeJours = 29;
//         } else {
//             echo $nbrDeJours = 28;
//         }
//         break;
//     case "Mars":
//         echo $nbrDeJours = 31;
//         break;
//     case "Avril":
//         echo $nbrDeJours = 30;
//         break;
//     case "Mai":
//         echo $nbrDeJours = 31;
//         break;
//     case "Juin":
//         echo $nbrDeJours = 30;
//         break;
//     case "Juillet":
//         echo $nbrDeJours = 31;
//         break;
//     case "Aout":
//         echo $nbrDeJours = 31;
//         break;
//     case "Septembre":
//         echo $nbrDeJours = 30;
//         break;
//     case "Octobre":
//         echo $nbrDeJours = 31;
//         break;
//     case "Novembre":
//         echo $nbrDeJours = 30;
//         break;
//     case "Décembre":
//         echo $nbrDeJours = 31;
//         break;
//     default:
//         echo $nbrDeJours = "mois invalide";
// }

// $num = readline("Indique un mois de l'année : ");
// $annee = readline("Indique une année : ");

// $nbrDeJours = 31;
// if ($num == 4 || $num == 6 || $num == 9 || $num == 11) {
//     $nbrDeJours = 30;
// } elseif ($num == 2) {
//     $nbrDeJours = (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0) ? 29 : 28;
// } elseif ($num < 1 || $num > 12) {
//     $nbrDeJours = "mois invalide";
// }

// echo $nbrDeJours;


// $annee = readline("Entrée une année : ");

// if((($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0)){
//     echo "Votre année est bissextile";
// }else{
//     echo "Votre année n'est pas bissextile";
// }

