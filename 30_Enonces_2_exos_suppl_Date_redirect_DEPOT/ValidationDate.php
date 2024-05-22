<?php
include "../Header.php";
$date="";
$mesg1="";
function verifier($date, $format = 'd-m-Y H:i:s')
{   
    // $date = $_GET['date'];
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

// var_dump(verifier('30-02-2012', 'd/m/Y')); #false
// var_dump(verifier('28/02/2012', 'd/m/Y')); # true


if (isset($_GET['submit'])) {
    $date = $_GET['date'];
    $mesg1 = "<br><h3 class='titre'>La date saisi est le " .$date."</h3><br>";
    }

// var_dump(verifier($date, 'd/m/Y'));

if (verifier($date, 'd/m/Y') === true) {
    $mess = "<br><p class='mess'>La date saisie existe</p><br>";
} else {
    $mess = "<br><p class='mess2'>La date saisie est fausse</p><br>";
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VerifDate</title>
    <link rel="stylesheet" href="ValidationDate.css">
</head>
<body>
    <br>
    <br>
<div class="form-container">
    <h4>Entrez une date au forma jj/mm/yyyy </h4>    
    <form action="./ValidationDate.php" class="form">
        <input type="text" name="date" placeholder="20/05/2024" >
        <button type="submit" name="submit">Test</button>
    </form>
    <br>
    <?php
    echo $mesg1;
    // echo "<br>La date saisie est " .($date)."<br>";
    echo $mess;
    ?>
 </div>
</body>
</html>