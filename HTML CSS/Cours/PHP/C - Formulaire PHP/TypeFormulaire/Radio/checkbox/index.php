<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="POST">
    <p>Centre d'intéret : </p>

    <input type="checkbox" id="musique" name="interet[]" value="musique">
    <label for="musique">Musique</label>
    
    <input type="checkbox" id="voyage" name="interet[]" value="voyage">
    <label for="voyage">Voyage</label>
    
    <input type="checkbox" id="lecture" name="interet[]" value="lecture">
    <label for="lecture">Lecture</label>

    <input type="checkbox" id="cinema" name="interet[]" value="cinema">
    <label for="cinema">Cinema</label>
    
    <input type="submit" value="Envoyer">

    </form>

    <?php
        if(isset($_POST['interet']) && is_array($_POST['interet'])){
            $interets = $_POST['interet'];

            foreach ($interets as $interet) {
                echo $interet. "\n";
            }
        }else{
            echo "Aucun interet sélectionnée";
        }
    ?>
    

    
</body>
</html>