<?php
require "fonctions.php";

if (isset($_POST['nombre1']) && isset($_POST['nombre2']) && isset($_POST['choix'])) {
    $nombre1 = $_POST['nombre1'];
    $nombre2 = $_POST['nombre2'];
    $choix = $_POST['choix'];

    $resultats = operation($choix, $nombre1, $nombre2);
}

ob_start(); ?>

<div class="form-container">

    <?php if ($resultats) : ?>
        <p><?= $resultats; ?></p>
    <?php endif; ?>
</div>

<?php
$content = ob_get_clean();
$title = "Résultat de l'opération";
$titre = "Calculatrice - Résultat";
require "template.php";
?>