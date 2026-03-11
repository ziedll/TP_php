<?php
/*phase 1*/

$annuaire = ["Maxime"];
$annuaire[] = "Sophie";
$annuaire[] = "Zied";

$motDePasseAdmin = "Tyrolium2026";
$ageMinimum = 18;

/*phase 3*/

function afficherBadge($nom, $statut){
    echo "Badge généré $nom-$statut" . "<br>";
}
?>
<!--phase 2-->
<!doctype html>
<html lang=>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="evaluation_finale.php" method="POST"></form>
<input type="text" name="prenom" placeholder="Entrez votre prénom">
<input type="number" name="age" placeholder="Entrez votre age">
<input type="password" name="code" placeholder="Entrez le mdp">
<select name="statut" id="">
    <option value="Stagiaire">Stagiaire</option>
    <option value="Employé">Employé</option>
</select>
<button type="submit">Ajouter un répertoire</button>
</body>
</html>

