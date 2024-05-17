<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petit 1</title>
    <style>
        /* body{
            background-color : black;
        } */
    </style>
</head>
<body>

<h1>Une table de multiplication</h1>

    <table>
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
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <?php
                for ($i=2; $i <= 10; $i++) { 
                    $resu = $i*2;
                    echo "<td>$resu</td> ";
                }
                ?>
            </tr>
            <tr>
                <td>3</td>
                <?php
                for ($i=2; $i <= 10; $i++) { 
                    $resu = $i*3;
                    echo "<td>$resu</td> ";
                }
                ?>
            </tr>
            <tr>
                <td>4</td>
                <?php
                for ($i=2; $i <= 10; $i++) { 
                    $resu = $i*4;
                    echo "<td>$resu</td> ";
                }
                ?>
            </tr>
            <tr>
                <td>5</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td>".($i*5)."</td> ";
                }
                ?>
            </tr>
            <tr>
                <td>6</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td>".($i*6)."</td> ";
                }
                ?>
            </tr>
            <tr>
                <td>7</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td>".($i*7)."</td> ";
                }
                ?>
            </tr>
            <tr>
                <td>8</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td>".($i*8)."</td> ";
                }
                ?>
            </tr>
            <tr>
                <td>9</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td>".($i*9)."</td> ";
                }
                ?>
            </tr>
            <tr>
                <td>10</td>
                <?php
                for ($i=2; $i <= 10; $i++) {                     
                    echo "<td>".($i*10)."</td> ";
                }
                ?>
            </tr>
        </tbody>
    </table>
    
</body>
</html>