<?php
include "../Header.php";
    $strContenu = "";
    session_start(); //On va regarder si on a une variable SESSION NOM
    if (isset($_SESSION["nom"])) {
        $strContenu = "<h1>Au menu du jour pour vous, {$_SESSION["nom"]}...</h1>";
        $strContenu .= "<ul>
                            <li><a href='Question3_LoginCtrl.html'>Sommaire</a></li>
                            <li>Et aussi...</li>
                            <li>Et encore...</li>
                            <li>Et pour finir...</li>
                        </ul>";
    } else {
        // On n'est pas passé par le Login !!!
        $strContenu = "<h1>ERREUR login : vous n'avez pas droit d'accès à ce site</h1>";
        $strContenu .= "<br/><br/><a href='Question3_LoginCtrl.html'>Retour à la page de Login</a>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $strContenu;
    ?>
</body>
</html>