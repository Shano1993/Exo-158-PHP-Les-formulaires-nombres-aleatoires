<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo 158</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post" action="script.php">
        <div>
            <label for="id-one">Premier nombre</label>
            <input type="number" name="one" id="id-one">
        </div>
        <div>
            <label for="id-two">Deuxième nombre</label>
            <input type="number" name="two" id="id-two">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
</body>
</html>