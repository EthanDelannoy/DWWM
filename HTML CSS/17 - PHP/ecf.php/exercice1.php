<?php

echo "*********************\n";
echo "CALCUL SUR LE CERCLE\n";
echo "*********************\n";

do {
    // Boucle avec isnumeric pour l'obligé à rentrer un nombre
    do {
        $rayon = readline("Entrez le rayon du cercle : \n");
        if (!is_numeric($rayon)) {
            echo "Erreur : Veuillez entrer un nombre valide.\n";
        }
    } while (!is_numeric($rayon));
    
    // calcul de la circonférence et de la surface
    $pi = pi();
    $circonference = 2*$pi*$rayon;
    $surface = $pi*($rayon*$rayon);
    
    echo "La criconférence du cercle est : ".number_format($circonference,2)."\n";
    echo "La surface du cercle est : ".number_format($surface,2)."\n"."\n";
    
    // Boucle avec do while pour l'obligé à rentrer une réponse valide
    do {
        $choix = readline("Voulez-vous faire un autre calcul ? (o/n) : ");
        $choix = strtolower($choix);

        if ($choix != 'o' && $choix != 'n') {
            echo "Entrez une réponse\n";
        }
    } while ($choix != 'o' && $choix != 'n');

} while ($choix == "o");

echo "Au revoir à bientôt";




