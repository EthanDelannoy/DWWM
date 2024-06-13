<?php


require_once 'login.php';
unset($_SESSION['user_id']);
$_SESSION = array();
session_destroy();
header("Location: login.php");
?>
<?php
    $content = ob_get_clean();
    $titre = "Vous n'étes plus connecté";
    $title = "Déconnection";
    require "template.php";
?>