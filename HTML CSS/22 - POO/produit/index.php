<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magasin</title>
</head>

<body>

    <form action="index.php" method="post">
        <label for="nom">Nom du produit :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" required><br><br>

        <label for="stock">Stock initial :</label>
        <input type="number" id="stock" name="stock" required><br><br>

        <input type="submit" value="Fiche produit">
    </form>

</body>

</html>

<?php

require_once "Produit.class.php";


if (isset($_POST['nom'], $_POST['prix'], $_POST['stock'])) {
    $nomProduit = $_POST['nom'];
    $prixProduit = $_POST['prix'];
    $stockInitial = $_POST['stock'];


    $Produit = new Produit($nomProduit, $prixProduit, $stockInitial);


    echo "***************************" . "<br>";
    echo "****** Produit de base ! *******" . "<br>";
    echo "***************************" . "<br>";

    $Produit->afficherProduit();

    echo "***************************" . "<br>";

?>

    <form action="index.php" method="post">
        <label for="nouveauPrix">Nouveau prix :</label>
        <input type="number" id="nouveauPrix" name="nouveauPrix" required><br><br>
        <input type="submit" value="Changer le prix">
    </form>

    <?php
    if (isset($_POST['nouveauPrix'])) {
        $nouveauPrix = $_POST['nouveauPrix'];

        $Produit = new Produit($nomProduit, $nouveauPrix, $stockInitial);

        $Produit->mettreAJourPrix($nouveauPrix);
        $Produit->afficherProduit();

        echo "***************************" . "<br>";
    }

    ?>

    <form action="index.php" method="post">
        <label for="ajouterStock">Ajoutez au stock :</label>
        <input type="number" id="ajouterStock" name="ajouterStock" required><br><br>
        <input type="submit" value="Ajouter au stock">
    </form>

    <?php
    if (isset($_POST['ajouterStock'])) {
        $nouveauStock = $_POST['ajouterStock'];

        $Produit = new Produit($nomProduit, $nouveauPrix, $nouveauStock);

        $Produit->ajouterStock($nouveauStock);
        $Produit->afficherProduit();

        echo "***************************" . "<br>";
    }
    ?>

    <form action="index.php" method="post">
        <label for="vendreProduit">Produit vendu :</label>
        <input type="number" id="vendreProduit" name="vendreProduit" required><br><br>
        <input type="submit" value="Mettre à jour le stock">
    </form>

<?php
    if(isset($_POST['vendreProduit'])){
        $produitVendu = $_POST['vendreProduit'];

        $Produit = new Produit($nomProduit, $nouveauPrix, $produitVendu);

        $Produit->vendreProduit($produitVendu);
        $Produit->afficherProduit();

        echo "***************************" . "<br>";
    }


}
?>