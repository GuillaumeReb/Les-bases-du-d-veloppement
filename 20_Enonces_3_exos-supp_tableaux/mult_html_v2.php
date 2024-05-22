<?php
include "../Header.php";
$titre = "<br><br><h1 class='titre'>Une table de multiplication</h1>";
echo $titre;

echo "<table class='tableau'>
 <thead class='tableau-gris'>
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
echo "<tbody>";
for ($i=2; $i <= 10; $i++) { 
    echo '<tr>';
    echo "<td class='tableau-gris'>$i</td>";
    for ($j=2; $j <= 10; $j++) { 
      echo "<td class='tableau-noir'>".($i*$j)."</td>";
    }
    echo '</tr>';
  }
echo "</tbody> </table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: black;
            
        }
        .tableau{
            margin-left:350px;
            margin-top:100px;
           
        }
        td, th {
            border : 2px solid rgb(133, 131, 131) ;
            width: 100px;
            text-align: center;
        }
        .titre {
            margin-top:20px;
           text-align : center;
            background-color: black;
            color: magenta;
        }
        .tableau-gris {
            background-color: lightgrey;
            color: black;   
            height: 30px;;       
        }
        .tableau-noir {
            background-color: black;
            color: lightgrey;          
        }
    </style>
    <title>V2</title>
</head>
<body>
    
</body>
</html>