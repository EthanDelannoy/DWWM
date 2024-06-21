<?php
require_once "Employe.class.php";
require_once "Manager.class.php";

$alice = new Employe("Alice", "50000");
$bob = new Manager("Bob", "70000", ["Alice"]);

$alice->afficherDetails();
echo "*********************<br>";
$bob->afficherDetails();

?>

<form action="index.php" method="POST">
    <label for="employe">Nom :</label>
    <input type="text" id="employe" name="nom" required>
    <input type="submit" value="Envoyer">
</form>
