<?php
include "../Header.php";
?>

<!-- Ce premier exercice est une variante du programme d'affichage du message «Hello World!» 
utilisé fréquemment pour présenter les techniques de programmation de chaque langage. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
    <style>
        .k{
            text-align:center;
        }
    </style>
</head>
<body>
<?php


for ($i = 1; $i <= 7; $i++){
    // echo "<font size ='".$i."'> Hello World !!!!! </font><br>";
    echo "<p class='k'><font size ='".$i."'> Hello World !!!!! </font><br></p>";
}

?>
<br>
<p class='k'>... et la suite de la page Web...</p>
</body>
</html>