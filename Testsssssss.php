<!-- Ce premier exercice est une variante du programme d'affichage du message «Hello World!» 
utilisé fréquemment pour présenter les techniques de programmation de chaque langage. -->

<?php
echo "Hello World";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
<?php
echo "Hello World <br>";

/* exemple 1 */
for ($i = 1; $i <= 10; $i++){
    echo $i;
}

$mot = "Hello World <br>";
for ($i = 1; $i <= 10; $i++){
    echo $mot;
}

for ($i = 1; $i <= 10; $i++){
    echo "<font size ='".$i."'> Hello World !!!!! </font><br>";
}





/* exemple 2 */
for ($i = 1; ;$i++){
    if ($i > 10) {
        break;
    }
    echo $i;
}


?>


<!-- Question 2 -->
<pre>
<?php
print_r($_SERVER);

echo "<table border='2px'>
<thead>
    <tr>
        <th>Clé</th>
        <th>Valeur</th>
    </tr>
</thead>

<tbody>";
echo " <tr>
<td>HTTP_HOST</td>
<td>{$_SERVER['HTTP_HOST']}</td>
</tr>";
echo $_SERVER["HTTP_HOST"];

echo "</tbody>
</table>";

?>

<table border="2px">
    <thead>
        <tr>
            <th>Col1</th>
            <th>Col2</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Valeur 1</td>
            <td>Valeur 2</td>
        </tr>
    </tbody>
</table>
</body>
</html>