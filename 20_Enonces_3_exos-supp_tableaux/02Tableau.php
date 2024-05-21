<?php
include "../Header.php";
////////////////
    // Point 1
    ////////////////
    $a = "5";
    $b = "10";
    echo 'Point 1 : Avant $a = '.$a.'    $b = '.$b. " <br/>"; 

    list($b, $a) = array($a,$b); // Une seule ligne

    echo 'Après $a = '.$a.'    $b = '.$b. " <br/>"; 

////////////////
    // Point 2
    ////////////////

    $pays = array("France", "Italie", "Portugal");

////////////////
    // Point 3
    ////////////////
    echo var_dump($pays);
    echo "<br>";
    print_r($pays);
    

////////////////
    // Point 4
    ////////////////
    echo "<br>";
    echo "Point 4 nb d'éléments = "  .count($pays);
    echo "<br>";
    echo "<br/>Point 4 : Liste des Pays (Boucle FOR)";
    for ($i=0; $i < count($pays) ; $i++) { 
        echo "<br/>Pays N° ".$i. " = ".$pays[$i]; 
    }
    echo "<br/>";
 ////////////////
    // Point 5
    ////////////////
    echo "<br/>Point 5 : Liste des Pays (Boucle FOREACH)";
    foreach ($pays as $value) {
        echo "<br/>Pays ".$value; 
    }
    echo "<br/>";
////////////////
    // Point 7
    ////////////////
    echo "<br>";
    $pays = array("France"=>"Paris", "Italie"=>"Rome", "Portugal"=>"Lisbonne");
    echo var_dump($pays);
    echo "<br>";

////////////////
    // Point 8
    ////////////////
    echo "<br>";
    echo "Point 8 nb d'éléments = "  .count($pays);
    echo "<br>";

////////////////
    // Point 9
    ////////////////
    echo "<br>";
    foreach ($pays as $value =>$y) {
        echo "<br/>Pays : .$value, Capitale : $y"; 
    }
    echo "<br/>";
    
////////////////
    // Point 10
    ////////////////
    echo "<br/><br/>Point 10 : énumerer un tableau associatif comme si tableau indicé";
    
    // function enumerer($t)
    // {
    //     for ($i=0; $i < count($t) ; $i++) { 
    //         echo "<br/>Pays N° ".$i. " = ".$t[$i]; 
    //     }
    // }
    // enumerer($pays);
////////////////
    // Point 11
    ////////////////
    echo "<br/><br/>Point 11</br>";
    // ajouter($pays);
    // $pays = array("orange", "banana");
array_push($pays, "Chine", "Pekin", "Suisse", "Geneve");
print_r($pays);
echo "<br/>";
////////////////
    // Point 12
    ////////////////
    echo "<br/><br/>Point 12</br>";
    var_dump($pays);



?>