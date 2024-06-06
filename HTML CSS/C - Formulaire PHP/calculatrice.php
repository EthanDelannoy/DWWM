<?php  
ob_start();
?>

<div class="form-container">
    <form action="traitementCalculatrice.php" method="POST">
        <label for="nombre1">Entrez un premier nombre :</label>
        <input type="number" name="nombre1" id="nombre1" required>
        <label for="nombre2">Entrez un deuxième nombre :</label>
        <input type="number" name="nombre2" id="nombre2" required>
        <label for="choix">Choisissez l'opération :</label>
        <select name="choix" id="choix" required>
            <option value="Addition">Addition</option>
            <option value="Soustraction">Soustraction</option>
            <option value="Multiplication">Multiplication</option>
            <option value="Division">Division</option>
        </select>
        <input type="submit" value="Calculer">
    </form>
</div>

<?php
$content = ob_get_clean();
$titre = "Calculatrice";
require "template.php";
?>