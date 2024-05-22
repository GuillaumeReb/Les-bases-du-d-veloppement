<?php
session_start(); // Démarrer la session

include "../Header.php";

if (!isset($_SESSION["email"])) {
    // echo "Non connecté. Redirection vers form1.php.";
    header("location:form1.php"); // Rediriger vers la page de connexion si non connecté
    exit();
}

$email = $_SESSION["email"]; // Récupérer l'email de la session

if (isset($_POST["logout"])) {
    session_unset(); // Libérer toutes les variables de session
    session_destroy(); // Détruire la session
    // echo "Déconnexion réussie. Redirection vers form1.php.";
    header('Location: ./form1Cookies.php'); // Rediriger vers la page de connexion
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form2Cookies.css">
    <title>Form 2</title>
</head>
<body>
<div class="container">
        <h1 class="titre">Bienvenue</h1>
        <p class="message">Bonjour, <?php echo htmlspecialchars($email); ?> ! Vous êtes connecté cookies.</p>
        <form action="" method="post" class="form">
            <input type="submit" value="Déconnexion" name="logout" class="logout-btn">
        </form>
    </div>
</body>
</html>