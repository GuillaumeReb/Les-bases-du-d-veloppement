<pre>
<?php
    $tab = array("php7@free.fr","sacha@gmail.com",
    "ariel@wanadoo.fr", "webmestere@wanadoo.fr",
    "marcelduchamp@gmail.com", "picasso69@gmail.com", 
    "vangogh@gmail.com","matis63@free.fr","degas45@wanadoo.fr");

    // print_r(array_count_values($tab));
    // print_r(count($tab));

    // print_r (explode(',',$tab,0));


    $fournisseur = array();
    foreach($tab as $value){
        $val = explode("@", $value);
        $fournisseur[] = $val[1];
    }
    echo "<br>";
    var_dump($fournisseur);


     // Cumul de nombre d'occurences de chaque domaine dans
    // un tableau nommé $occurences
    $occurences = array_count_values($fournisseur);
    var_dump($occurences);

     // echo "<br/>";

     $nb_mails = count($tab); // Nombre total d'@mail pour le calcul du %

     // Affichage du résultat
     foreach ($occurences as $key => $value) {
         echo " <br/>Fournisseur d'accès : ".$key . " = ". round(($value/$nb_mails)*100,2). " %";
     }
?>