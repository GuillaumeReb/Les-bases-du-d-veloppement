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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur</title>
</head>
<body>
    <h1>Erreur : Appel de ce script sans passer par le formulaire de Login !!!!</h1>
    <a href="Question3_LoginCtrl.html">Retour à la page de Login</a>
    
</body>
</html>