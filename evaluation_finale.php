<?php
/*phase 1*/

$annuaire = ["Maxime"];
$annuaire[] = "Sophie";
$annuaire[] = "Zied";

$motDePasseAdmin = "Tyrolium2026";
$ageMinimum = 18;

/*phase 3*/

function afficherBadge($prenom, $statut){
    echo "Badge généré $nom-$statut" . "<br>";
}
if(isset($_POST["prenom"])&&isset($_POST["statut"])&&isset($_POST["age"])&&isset($_POST["code"])){
    $prenom = $_POST["prenom"];
    $age = $_POST["age"];
    $statut = $_POST["statut"];
    $code = $_POST["code"];
    if($age>$ageMinimum && $code == $motDePasseAdmin){
        $annuaire[] = $prenom;
        echo "Bienvenue, $prenom a été ajouté ! <br>";
    }elseif ($age<$ageMinimum || $statut == "Stagiaire"){
        echo "Erreur : Accès non autorisé pour ce profil";
    }else{
        echo "Erreur : Mot de pass admin incorrect";
    }
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

