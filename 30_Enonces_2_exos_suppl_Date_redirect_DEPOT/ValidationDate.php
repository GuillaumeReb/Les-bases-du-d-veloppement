<?php
function verifier($date, $format = 'd-m-Y H:i:s')
{   
    $date = $_GET['date'];
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

// var_dump(verifier('30-02-2012', 'd/m/Y')); #false
// var_dump(verifier('28/02/2012', 'd/m/Y')); # true


if (isset($_GET['submit'])) {
    $date = $_GET['date'];
    echo "<br>La date saisi est " .$date."<br>";
}

var_dump(verifier($date, 'd/m/Y'));

if (verifier($date, 'd/m/Y') === true) {
    echo "<br>La date saisie existe</br>";
} else {
    echo "<br>La date saisie est fausse</br>";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VerifDate</title>
</head>
<body>
    <h1>Question</h1>
    <form action="./ValidationDate.php">
        <input type="text" name="date" placeholder="20/05/2024" >
        <button type="submit" name="submit">Test</button>
    </form>
    <br>
    <?php
    echo "<br>La date saisie est " .($date)."<br>";
    ?>
</body>
</html>