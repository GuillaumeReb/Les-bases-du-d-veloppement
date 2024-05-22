<?php
include "../Header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petit 1</title>
    <link rel="stylesheet" href="./styleMultV.CSS">
</head>
<body>
<br>
<br>
<h1 class='titre'>Une table de multiplication</h1>

    <table class='tableau'>
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
        </thead>
        <tbody>
            <tr>
                <td class='tableau-gris'>2</td>
                <?php
                for ($i=2; $i <= 10; $i++) { 
                    $resu = $i*2;
                    echo "<td class='tableau-noir'>$resu</td> ";
                }
                ?>
            </tr>
            <tr>
                <td class='tableau-gris'>3</td>
                <?php
                for ($i=2; $i <= 10; $i++) { 
                    $resu = $i*3;
                    echo "<td class='tableau-noir'>$resu</td> ";
                }
                ?>
            </tr>
            <tr>
                <td class='tableau-gris'>4</td>
                <?php
                for ($i=2; $i <= 10; $i++) { 
                    $resu = $i*4;
                    echo "<td class='tableau-noir'>$resu</td> ";
                }
                ?>
            </tr>
            <tr>
                <td class='tableau-gris'>5</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td class='tableau-noir'>".($i*5)."</td> ";
                }
                ?>
            </tr>
            <tr>
                <td class='tableau-gris'>6</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td class='tableau-noir'>".($i*6)."</td> ";
                }
                ?>
            </tr>
            <tr>
                <td class='tableau-gris'>7</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td class='tableau-noir'>".($i*7)."</td> ";
                }
                ?>
            </tr>
            <tr>
                <td class='tableau-gris'>8</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td class='tableau-noir'>".($i*8)."</td> ";
                }
                ?>
            </tr>
            <tr>
                <td class='tableau-gris'>9</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td class='tableau-noir'>".($i*9)."</td> ";
                }
                ?>
            </tr>
            <tr>
                <td class='tableau-gris'>10</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td class='tableau-noir'>".($i*10)."</td> ";
                }
                ?>
            </tr>
        </tbody>
    </table>
    
</body>
</html>