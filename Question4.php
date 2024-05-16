<?php
session_start();
// créer une variable de session
$_SESSION["nom"] = $_GET["nom"];

foreach ($_GET as $cle => $valeur) {
    echo "<br/> Clé : $cle a pour valeur : $valeur";
 }

?>
