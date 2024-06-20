<?php 

require_once "Stagiaire.class.php";

$Akali = new Stagiaire("Akali", [12, 14, 16]);
$Zed = new Stagiaire("Zed", [15, 17, 13]);
$Shaco = new Stagiaire("Shaco", [8, 9, 7]);
$Annivia = new Stagiaire("Annivia", [5, 6, 4]);
$Qyianna = new Stagiaire("Qyianna", [20, 18, 19]);
$Lucian = new Stagiaire("Lucian", [18, 17, 20]);

$stagiaires = array($Akali, $Zed, $Shaco, $Annivia, $Qyianna, $Lucian);

foreach ($stagiaires as $stagiaire) {
    echo "Nom: " . $stagiaire->getNom() . " / Moyenne: " . $stagiaire->calculerMoyenne() . "<br>";
}

echo "*******************************************"."<br>";

foreach ($stagiaires as $stagiaire) {
    echo "Nom: " . $stagiaire->getNom() . " / Plus grande note : " . $stagiaire->trouverMax() . "<br>";
}

echo "*******************************************". "<br>";

foreach ($stagiaires as $stagiaire) {
    echo "Nom: " . $stagiaire->getNom() . " / Plus petite note " . $stagiaire->trouverMin() . "<br>";
}
?>