<?php
ob_start();
require_once "dbConnect.php";

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

if(isset($_POST['email']) && isset($_POST['mdp'])) {
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $pdo = getPDOConnexion();
    $stmt = $pdo->prepare('SELECT id, mdp FROM Users WHERE email = ?');
    $stmt->execute([$email]); 
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user) {
        $passwordHash = $user['mdp'];
        var_dump($passwordHash);
        var_dump($mdp);
        if(password_verify($mdp, $passwordHash)) {
            $_SESSION['user_id'] = $user['id'];
            header('Location: index.php');
            exit();
        }else{
            $erorr = "erreur";
        }

        } else {
            $error = "Mot de passe incorrect";
        }
     }


?>
<div class="login-container">
    <?php if(isset($error)): ?>
        <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form action="" method="POST">
         <label for="email">Email :</label>
         <input type="email" name="email" id="email" required>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" required>
        <input type="submit" value="Login">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Identification Espace Admin";
require "template.php";
?>