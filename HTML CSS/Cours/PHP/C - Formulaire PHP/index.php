<?php  ob_start(); ?>

<div class="form-container">
<h2>Bonjour !</h2>
</div>



<?php
    $content = ob_get_clean();
    $titre = "Ma page d'accueil";
    $title = "Accueil";
    require "Template.php";
?>