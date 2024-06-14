<?php
ob_start();
require_once "dbConnect.php";
?>
<?php
$nom = "";
$prenom = "";
$email = "";
$number = "";
$validation = true;

?>

<div class="form-container">
    <form action="" method="POST">

    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($nom) ?>" required>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="<?= htmlspecialchars($prenom) ?>" required>

    <label for="email">Email :</label>
    <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>" required>

    <label for="email">télephone :</label>
    <input type="number" name="number" id="number" value="<?= htmlspecialchars($number) ?>" required>

    <label for="role">Rôle :</label>
    <select name="role" id="role">
    <option value="admin">Admin</option>
    <option value="non-Admin">Non-Admin</option>
    </select>


        <input type="submit" value="Ajouter l'utilisateur">
    </form>

    <?php

if (isset($_POST['nom'])) {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!ctype_alpha($nom)) {
        echo "<p>Le nom n'est pas valide</p>";
    }
}

//----------------------------------------------------------VERFIFICATION PRENOM--------------------------------------------------

if (isset($_POST['prenom'])) {
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (!ctype_alpha($prenom)) {
        echo "<p>Le prenom n'est pas valide</p>";
    }
}

//----------------------------------------------------------VERFIFICATION EMAIL--------------------------------------------------

if (isset($_POST['email'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // Verifier si l'email est valide

    if (!$email) {
        echo "<p>L'adresse email non valide</p>";
        $validation = false;
    }
}

//----------------------------------------------------------VERFIFICATION TELEPHONE--------------------------------------------------

if (isset($_POST['number'])) {
    $number = filter_input(INPUT_POST, 'number', FILTER_DEFAULT);

    if (!is_numeric($number)) {
        echo "<p>Le numéro de téléphone n'est pas valide</p>";
        $validation = false;
    }
}

if(isset($_POST['nom'], $_POST['prenom'], $_POST['email'],  $_POST['number'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $role = $_POST['role'];
    $pdo = getPDOConnexion();
    $stmt = $pdo->prepare('INSERT INTO Users (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)');
    $stmt->execute([$prenom, $nom, $email, $number]);
    $user = $stmt->fetch();


    $userId = $pdo->lastInsertId();
    $stmt = $pdo->prepare('INSERT INTO Userroles (user_id, role) VALUES (?,?)');
    $stmt->execute([$userId,$role]);

    echo "Utilisateur crée.";
}



?>
</div>


<?php
$content = ob_get_clean();
$titre = "Créer un utilisateur";
require "template.php";
?>