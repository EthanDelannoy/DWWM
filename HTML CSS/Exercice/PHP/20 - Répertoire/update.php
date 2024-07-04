<?php
ob_start();
require_once "dbConnect.php";
?>

<?php
$id = $_GET['id'];
$nom = "";
$prenom = "";
$email = "";
$mdp = "";
$number = "";
$role = "";
$validation = true;

if ($id) {
    $pdo = getPDOConnexion();
    $stmt = $pdo->prepare('SELECT nom, prenom, email, mdp, telephone FROM Users WHERE id = ?');
    $stmt->execute([$id]);
    $user = $stmt->fetch();

    if ($user) {
        $nom = $user['nom'];
        $prenom = $user['prenom'];
        $email = $user['email'];
        $number = $user['telephone'];
    } else {
        echo "<p>Utilisateur non trouvé</p>";
    }
}

?>

<div class="form-container">
    <form action="" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?= htmlspecialchars($nom) ?>" required>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" value="<?= htmlspecialchars($prenom) ?>" required>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>" required>

        <label for="email">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp" value="<?= htmlspecialchars($mdp) ?>" required>

        <label for="number">Téléphone :</label>
        <input type="number" name="number" id="number" value="<?= htmlspecialchars($number) ?>" required>

        <label for="role">Rôle :</label>
        <select name="role" id="role">
        <option value="admin">Admin</option>
        <option value="non-Admin">Non-Admin</option>
        </select>

        <input type="submit" value="Mettre à jour les données">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $id) {
        $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $mdp = filter_input(INPUT_POST, 'mdp', FILTER_DEFAULT);
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_NUMBER_INT);
        $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
        if (!ctype_alpha($nom)) {
            echo "<p>Le nom n'est pas valide</p>";
            $validation = false;
        }
    
        if (!ctype_alpha($prenom)) {
            echo "<p>Le prénom n'est pas valide</p>";
            $validation = false;

        }
        if (!$email) {
            echo "<p>L'adresse email non valide</p>";
            $validation = false;
        }
        
        $longueur = 8;
        if (strlen($mdp) < $longueur) {
            echo "<p>Votre mot de passe est trop court ! Veuillez avoir 8 caractéres minimum</p>";
            $validation = false;
        }

        if (!is_numeric($number)) {
            echo "<p>Le numéro de téléphone n'est pas valide</p>";
            $validation = false;
        }
    
        if ($validation) {
            $pdo = getPDOConnexion();
            $stmt = $pdo->prepare('UPDATE Users SET nom = ?, prenom = ?, mdp = ?, telephone = ? WHERE id = ?');
            $stmt->execute([$nom, $prenom, $mdp, $number, $id]);
            
            $stmt = $pdo->prepare('UPDATE Userroles SET role = ? WHERE user_id = ?');
            $stmt->execute([$role, $id]);
    
            echo "<p>Utilisateur mis à jour.</p>";
        }
    }
    ?>
</div>

<?php
$content = ob_get_clean();
$titre = "Modification des données";
require "template.php";
?>