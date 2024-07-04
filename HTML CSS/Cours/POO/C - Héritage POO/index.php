<?php
require_once "Chien.class.php";

$chien = new Chien("Rex le cabot");
echo $chien->nom ." ". "dit" ." ". $chien->parler();