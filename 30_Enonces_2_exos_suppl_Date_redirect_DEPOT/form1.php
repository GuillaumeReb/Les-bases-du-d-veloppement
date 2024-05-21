<?php
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
    $passeword = $_POST["pwd"];
    $valide = false;

    foreach ($utilisateurs as $utilisateur) {
        if ($utilisateur["email"] === $email && $utilisateur["password"] === $passeword) {
            $valide = true;
            break;
        }
    }

        if ($valide) {
        // Rediriger en cas de succès
        header('Location:https://www.reverso.net/orthographe/correcteur-francais/');
        exit(); // Assurez-vous de terminer le script après redirection
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
    <style>
        .titre{
            text-align:center;
        }
        .form{
            text-align:center;
        }

    </style>
</head>
<body>
    <br>
<h1 class="titre">Page de connection</h1>
<br>
<br>
<?php
echo $msg;
?>
<br>
<br>
<form action="form1.php" method="POST" class="form">
    <label for="txtnom">Entrez votre email </label>
    <input type="mail" id="txtmail" name="mail"><br>
    <br>
    <label for="txtpwd">Entrez votre mot de passe</label>
    <input type="password" id="txtpwd" name="pwd"><br>
    <br>
    <input type="submit" value="Envoyer" name="btn">
    <!-- <input type="reset" value="Recommencer"> -->
</form>
    
</body>
</html>