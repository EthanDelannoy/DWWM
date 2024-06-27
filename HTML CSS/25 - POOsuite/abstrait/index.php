<?php
require_once "Plante.class.php";
require_once "Chene.class.php";
require_once "Rose.class.php";

$chene = new Chene("Le chêne", "arbre", "20 mètres", "100 ans", "Fagacées", "brun");
$rose = new Rose("La rose", "fleur", "30 centimètres", "14 jours", "Rosacées", "rouge", "épines");

$chene->afficher();
$rose->afficher();