<?php 

function verifierSaisie($valeur){
    if(!is_numeric($valeur) || $valeur <=0){
        return false; 
    }
    return true;
}

function calculerCercle($rayon){
    $circonference = 2 * M_PI * $rayon;
    $surface = M_PI * pow($rayon, 2);

    return [
        'circonference' => round($circonference, 2),
        'surface' => round($surface, 2)
    ];
}
?>

<?php 
function operation($choix,$nombre1,$nombre2){

switch($choix){
    case "Addition": 
        $resultat = $nombre1 + $nombre2;
        return  $resultat;
        break;
    
    case "Soustraction": 
        $resultat = $nombre1 - $nombre2;
        return $resultat;
        break;
    
    case "Multiplication":
        $resultat = $nombre1 * $nombre2;
        return $resultat;
        break;
    
    case "Division":

        //Vérification du deuxième nombre
        if($nombre2 != 0){
            $resultat = $nombre1 / $nombre2;
            return $resultat;
        }else{
            return "erreur : division par zéro \n";
        }
        break;
    default:
    return "Choix invalide\n";

}

}
?>