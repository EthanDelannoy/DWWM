<?php
require "index.php";

if ($nom && $email && $mdp && $mdp2 && $age && $sexe) {
   
    echo "<p>Inscription réussie !</p>";
    echo "<p>Vous êtes : $nom</p>";
    echo "<p>Votre email : $email</p>";
    echo "<p>Vous êtes né(e) le : $dateDeNaissanceFormatee</p>";
    echo "<p>Vous êtes un(e) : $sexe</p>";
}