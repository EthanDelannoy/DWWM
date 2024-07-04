<?php
session_start();
require_once "Employe.class.php";
require_once "Manager.class.php";
?>
<form action="index.php" method="POST">
    <label for="employe">Nom :</label>
    <input type="text" id="employe" name="employe" required>
    <input type="submit" value="Envoyer">
</form>

<?php

if (isset($_POST['employe'])) {
    $employe = $_POST['employe'];
    $_SESSION['employes'][] = $employe;
}

$alice = new Employe("Alice", "50000");
$employes = array_merge(["Alice"], $_SESSION['employes']);
$bob = new Manager("Bob", "70000", $employes);

$alice->afficherDetails();
echo "*********************<br>";
$bob->afficherDetails();
?>


