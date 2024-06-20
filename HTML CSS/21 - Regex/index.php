<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Regex</title>
</head>
<body>
    <h1>Vérification du mot de passe</h1>
    <label for="passwordSaisie">Entrez votre mot de passe</label>
    <input type="password" id="passwordSaisie" oninput="verifPassword()">
    <p id="longueurMDP" class="invalid">- Doit comporter au minimum 8 caractères.</p>
    <p id="majuscule" class="invalid">- Au moins une majuscule</p>
    <p id="minuscule" class="invalid">- Au moins une minuscule</p>
    <p id="nombre" class="invalid">- Au moins un chiffre</p>
    <p id="specialChar" class="invalid">- Au moins un caractère spécial</p>

    <script src="script.js"></script>
</body>
</html>
