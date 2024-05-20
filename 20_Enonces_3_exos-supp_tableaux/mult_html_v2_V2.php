<?php

// Le debut de la page HTML
$page = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Table de multiplication Version 3 (Maximum PHP et 1 seul ECHO)</title>
    <style>
        body {
            background-color: black;
        }
        td, th {
            width: 100px;
            text-align: center;
        }
        .titre {
            background-color: black;
            color: magenta;
        }
        .tableau-gris {
            background-color: lightgrey;
            color: white;          
        }
        .tableau-noir {
            background-color: black;
            color: lightgrey;          
        }
    </style>
</head>
<body>";




$titre = "<h1>Une table de multiplication</h1>";
echo $titre;

$table = "<table>
<thead>
<tr>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
    <th>10</th>
</tr>
</thead>";
$table .= '<tbody>';
for ($i=2; $i <= 10; $i++) { 
    $table .= "<tr>";
    $table .= "<td>$i</td>";
    for ($j=2; $j<=10; $j++){
        $table .= "<td>$i*$j</td>";   
        }    
        $table .= "</tr>";
    }

$table .= "</tbody>  </table>  </body>
</html>";

echo $table;

?>
