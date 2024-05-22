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
            // $_SESSION["email"] = $email; // Stocker l'email dans la session
            setcookie("mail", $email, time() + 3600); //Cookie expire dans 1 heure
            break;
        }
    }

        if ($valide) {
        // $msg = "Connexion réussie! Redirection vers form2.php.";
        // Rediriger en cas de succès
        header("location:form2Cookies.php");
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
    <link rel="stylesheet" href="form1Cookies.css">
</head>
<body>
    <div class="container">
   
<h1 class="titre"><strong>Page de connection Cookies</strong></h1>
<form action="form1Cookies.php" method="POST" class="form">
    <label for="txtnom"><strong>Entrez votre email</strong> </label>
    <input type="mail" id="txtmail" name="mail" class="input"><br>
  
    <label for="txtpwd"><strong>Entrez votre mot de passe</strong></label>
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