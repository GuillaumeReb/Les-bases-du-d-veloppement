<?php
session_start(); // Démarrer la session
include "../Header.php";
$msg = "";
$erreur = false;

if (isset($_POST["btn"])){

    //verif mail et psw
    if (empty($_POST["mail"]) ) {
    $msg = "Merci de remplir le mail";
    $erreur = true;

    } elseif (empty($_POST["pwd"])) {
    $msg = "Merci de remplir le mot de passe";
    $erreur = true;    

    }else{
        $utilisateurs = [
        ["email" => "jean_valjean@academie.net", "password" => "hugo"],
        ["email" => "steve_ostin@lesseries.org", "password" => "3md"],
        ["email" => "david_banner@marvel.com", "password" => "hulk"]
         ];

    $email = $_POST["mail"];
    $password = $_POST["pwd"];
    $valide = false;

    foreach ($utilisateurs as $utilisateur) {
        if ($utilisateur["email"] === $email && $utilisateur["password"] === $password) {
            $valide = true;
            $_SESSION["email"] = $email; // Stocker l'email dans la session
            break;
        }
    }

        if ($valide) {
        // $msg = "Connexion réussie! Redirection vers form2.php.";
        // Rediriger en cas de succès
        header("location:form2.php");
        exit(); //Terminer le script après redirection
        
        } else {
        $msg = "Email ou mot de passe incorrect";
        $erreur = true;
        }
    }
    } else {
    $msg = "Saisie obligatoire"; // Message initial
    $erreur = true;
}
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1</title>
    <link rel="stylesheet" href="form1.css">
</head>
<body>
    <div class="container">
   
<h1 class="titre">Page de connection</h1>
<form action="form1.php" method="POST" class="form">
    <label for="txtnom">Entrez votre email </label>
    <input type="mail" id="txtmail" name="mail" class="input"><br>
  
    <label for="txtpwd">Entrez votre mot de passe</label>
    <input type="password" id="txtpwd" name="pwd" class="input"><br>
    
    <input type="submit" value="Envoyer" name="btn" class="submit">
    <!-- <input type="reset" value="Recommencer"> -->
</form>
<?php
echo "<p class='mess'>$msg</p>";
?>
</div>

</body>
</html>