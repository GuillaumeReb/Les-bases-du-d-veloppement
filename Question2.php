<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
</head>
<body>
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