<?php 

require_once "Voiture.class.php";

$buggati = new Voiture ("Buggati", "Mistral", "2024", "Bleu", "420 km/h");
$ferrari = new Voiture ("Ferrari", "Unica", "2022", "Rouge", "340 km/h");
$lamborghini = new Voiture ("Lamborghini", "Aventador", "2018", "Noir", "350 km/h");

$buggati->affichage();
$ferrari->affichage();
$lamborghini->affichage();

$buggati->accelerer(20);
$buggati->affichage();


?>