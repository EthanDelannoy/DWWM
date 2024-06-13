<?php
ob_start();
require_once "dbConnect.php";
?>





<?php
$content = ob_get_clean();
$titre = "Supprimer des données";
require "template.php";
?>