<?php
include "../Header.php";
$cejour = getdate();
$strTitre ="<h2 class='titre'>En ce jour {$cejour["mday"]} {$cejour["month"]} {$cejour["year"]}
sur le serveur {$_SERVER["SERVER_NAME"]},";
$strTitre .= "il est {$cejour["hours"]}h {$cejour["minutes"]}mn<br>";

$strTable = "<table border ='1'>
                <tr>
                    <th>Variable</th>
                    <th>Valeur</th>
                </tr>";
foreach($_SERVER as $item=>$valuer){
    $strTable .="<tr>
                    <td>$item</td>
                    <td>$valuer</td>
                </tr>";
}
$strTable .="</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
    <style>
        .titre{
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
    echo $strTitre;
    ?>
    <h3 class="titre">Variable HTTP serveur (getenv())</h3>
    <?php
    echo $strTable;
    ?>
   <br>
</body>
</html>