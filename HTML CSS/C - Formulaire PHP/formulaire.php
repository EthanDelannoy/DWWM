<?php ob_start(); ?>


<div class="form-container">
    <form action="for" method="POST">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom">
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
        <input type="submit" value="Envoyer">
        <?php
        if (isset($_POST['nom']) && isset($_POST['email'])) {
            $name = $_POST['nom'];
            $email = $_POST['email'];

            echo "<p>Nom : $name</p>";
            echo "<p>Email : $email</p>";
        } else {
            echo "<p>Aucune données soumise.</p>";
        }
        ?>

    </form>
</div>



<?php
$content = ob_get_clean();
$titre = "Exemple de formulaire";
require "Template.php";
?>