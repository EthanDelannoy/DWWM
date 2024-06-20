<?php 

require_once "plante.class.php";

$chene = new Plante("Le chêne", "arbre", "20 mètres", "100 ans", "Fagacées");
$rose = new Plante("La rose", "fleur", "1 mètres", "2 ans", "Rosacées");
$tournesol = new Plante("Le tournesol", "fleur", "3 mètres", "1 ans", "Astréracées");

$chene->affichage();
$rose->affichage();
$tournesol->affichage();

$chene->setHauteur("50 mètres");
$chene->affichage();

?>