<?php
session_start();
// créer une variable de session
$_SESSION["nom"] = $_GET["nom"];
// c'est fini; exécuter loginsuite.php
header("location:Question3_loginsuite.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur notre site</title>
</head>
<body>
    <h1>Bienvenue sur notre site Web</h1>

    <form action="TestFormulaire.php" method="GET">
        <label for="nom">Entrez votre nom </label>
        <input type="text" id="nom" name="nom"><br>
        <br>
        <label for="pwd">Entrez votre mot de passe</label>
        <input type="password" id="pwd" name="pwd"><br>
        <br>
        <input type="submit" value="Envoyer">
        <input type="reset" value="Recommencer">
    </form>
</body>
</html>