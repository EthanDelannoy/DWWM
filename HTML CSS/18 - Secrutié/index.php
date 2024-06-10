<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php
    $nom = "";
    $email = "";
    $mdp = "";
    $mdp2 = "";
    $naissance = "";
    ?>

<div>
<form action="traitement.php" method="POST">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($nom) ?>" required>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>" required>

    <label for="mdp">Mot de passe :</label>
    <input type="password" name="mdp" id="mdp" minlength="8" value="<?= htmlspecialchars($mdp) ?>" required>

    <label for="mdp2">Validez votre mot de passe :</label>
    <input type="password" name="mdp2" id="mdp2" minlength="8" value="<?= htmlspecialchars($mdp) ?>" required>

    <label for="naissance">Date de naissance :</label>
    <input type="date" name="naissance" id="naissance" value="<?= htmlspecialchars($naissance) ?>" required>

    <div class="inputRadio">
    <input type="radio" name="sexe" id="homme" value="homme" required>
    <label for="homme">Homme</label>

    <input type="radio" name="sexe" id="femme" value="femme" required>
    <label for="femme">Femme</label>

    </div>

    <input type="submit" value="Envoyer">
    </form>
</div>

<?php


if (isset($_POST['nom'])) {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!ctype_alpha($nom)) {
        echo "<p>Le nom n'est pas valide</p>";
    }
}


//----------------------------------------------------------VERFIFICATION EMAIL--------------------------------------------------

    if (isset($_POST['email'])) {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        // Verifier si l'email est valide

        if (!$email) {
            echo "<p>L'adresse email non valide</p>";
        }
    }
//----------------------------------------------------------VERFIFICATION MDP--------------------------------------------------


$longueur = 8;

if (isset($_POST['mdp'])) {
    $mdp = filter_input(INPUT_POST, 'mdp', FILTER_DEFAULT);

    if (strlen($mdp) < $longueur) {
        echo "<p>Votre mot de passe est trop court ! Veuillez avoir 8 caractéres minimum</p>";
    }
}

if (isset($_POST['mdp']) && isset($_POST['mdp2'])) {
    $mdp = filter_input(INPUT_POST, 'mdp', FILTER_DEFAULT);
    $mdp2 = filter_input(INPUT_POST, 'mdp2', FILTER_DEFAULT);
    if ($mdp !== $mdp2) {
        echo "<p>Mots de passe différents, veuillez bien mettre le même mot de passe !</p>";
    }
}

//----------------------------------------------------------VERFIFICATION NAISSANCE--------------------------------------------------

$dateActuelle = date("d-m-Y");

if (isset($_POST["naissance"])) {
    $dateDeNaissance = $_POST["naissance"];

    $timestampDateNaissance = strtotime($dateDeNaissance);
    $timestampDateActuelle = strtotime($dateActuelle);

    $difference = $timestampDateActuelle - $timestampDateNaissance;

 
    $age = floor($difference / (60 * 60 * 24 * 365));

    if ($age <= 18) {
        echo "Vous n'êtes pas majeur.";
    }

    $dateDeNaissanceFormatee = date("d-m-Y", $timestampDateNaissance);
}

// ------------------------------------------------------VERIF SEXE--------------------------------------------------------------------

if (isset($_POST['sexe'])) {
    $sexe = $_POST['sexe'];
}

?>
</body>
</html>