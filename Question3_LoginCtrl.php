<?php
session_start();
// créer une variable de session
$_SESSION["usrnom"] = $_POST["nom"];
// c'est fini; exécuter loginsuite.php
header("location:Question3_loginsuite.php");
?>