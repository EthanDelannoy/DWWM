<?php

require('fonctions.php');

echo "****************************************************\n";
echo "*               Ma Calculatrice                    *\n";
echo "****************************************************\n\n\n";

do {


    // Boucle avec isnumeric pour l'obligé à rentrer un nombre
    do {
        $nbre1 = readline("Entrez le premier nombre : \n");
        if (!is_numeric($nbre1)) {
            echo "Erreur : Veuillez entrer un nombre valide.\n";
        }
    } while (!is_numeric($nbre1));

     // Boucle avec isnumeric pour l'obligé à rentrer un nombre
    do {
        $nbre2 = readline("Entrez le deuxième nombre : \n");
        if (!is_numeric($nbre2)) {
            echo "Erreur : Veuillez entrer un nombre valide.\n";
        }
    } while (!is_numeric($nbre2));

    echo "---------------------------------------------------------------------\n";

    $choix1 = 1;
    $choix2 = 2;
    $choix3 = 3;
    $choix4 = 4;

    echo "Menu:\n $choix1. Addition\n $choix2. Soustraction\n $choix3. Multiplication\n $choix4. Division\n";

        // Boucle avec isnumeric pour l'obligé à rentrer un choix proposé
    do {
        $choix = readline("Entrez le numéro de l'opération que vous voulez effectuer : ");
        if (!is_numeric($choix) || !in_array($choix, [$choix1, $choix2, $choix3, $choix4])) {
            echo "Choix invalide.\n";
        }
    } while (!is_numeric($choix) || !in_array($choix, [$choix1, $choix2, $choix3, $choix4]));

    switch ($choix) {
        case $choix1:
            echo "Le résultat de l'addition est : " . addition($nbre1, $nbre2) . "\n";
            break;
        case $choix2:
            echo "Le résultat de la soustraction est : " . soustraction($nbre1, $nbre2) . "\n";
            break;
        case $choix3:
            echo "Le résultat de la multiplication est : " . multiplication($nbre1, $nbre2) . "\n";
            break;
        case $choix4:
            echo "Le résultat de la division est : " . division($nbre1, $nbre2) . "\n";
            break;
    }

        // Boucle avec do while pour l'obligé à rentrer une réponse valide
    do {
        $recommence = readline("Voulez-vous faire un autre calcul ? (o/n) : ");
        $recommence = strtolower($recommence);

        if ($recommence != 'o' && $recommence != 'n') {
            echo "Entrez une réponse valide.\n";
        }
    } while ($recommence != 'o' && $recommence != 'n');

} while ($recommence == "o");

echo "Au revoir !";