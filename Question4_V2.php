<?php
session_start();
// créer une variable de session
$_SESSION["nom"] = $_GET["nom"];

foreach ($_GET as $cle => $valeur) {
    echo "<br/> Clé : $cle a pour valeur : $valeur";
 }

 $interet = [];
 if (isset($_GET['internet'])) {
    $interet[] = 'internet, ';
}
if (isset($_GET['informatique'])) {
    $interet[] ='informatique, ';
}
if (isset($_GET['jeux'])) {
    $interet[] = 'jeux-vidéo.';
}
// Construction de la chaîne de caractères pour les centres d'intérêt
$interets = implode(', ', $interet);




 echo "<br>Centres d'intérêt :<br>";
 if (isset($_GET['internet'])) {
     echo "- Internet<br>";
 }
 if (isset($_GET['informatique'])) {
     echo "- Micro-informatique<br>";
 }
 if (isset($_GET['jeux'])) {
     echo "- Jeux vidéo<br>";
 }




//  if ($cle === "internet") {
//     echo "<br>internet";
//  }else{
//     echo "<br>Aime pas internet";
//  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire rempli</title>
</head>
<body>
    <h1>Merci à vous, <?php echo $_GET["nom"] ?></h1>

    <p>Vous avez donc le bel âge de <strong> <?php echo $_GET["age"] ?> </strong> ans,
vous êtes <strong> <?php echo $_GET["maritale"] ?> </strong> et vous vous intéressez à 
<strong>
    <?php
    echo $interets;
    ?>
</strong>
</body>
</html>