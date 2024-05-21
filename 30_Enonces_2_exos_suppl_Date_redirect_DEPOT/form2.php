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
    header('Location: ./form1.php'); // Rediriger vers la page de connexion
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
</head>
<body>
    <h1>Bienvenu</h1>
    <!-- Lien pour se déconnecter -->
    <form action="" method="post">
        <input type="submit" value="Déconnexion" name="logout">
    </form>
    <br>
    <br>
    <!-- a effacer apres débugg -->
    <?php if (isset($email)): ?>
        <h1>Bienvenue, <?php echo htmlspecialchars($email); ?>!</h1>
    <?php endif; ?>
    <!-- Lien pour se déconnecter -->
    <form action="" method="post">
        <input type="submit" value="Déconnexion" name="logout">
    </form>
</body>
</html>