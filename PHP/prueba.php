<?php
    include './Mclibre/matrices-2-plantillas/irregular-verbs-list.php'; 
    
    $formaVerbalNombre = ["infinitivo", "pasado", "participio"];
    
    $tiempo=rand(0, (count($formaVerbalNombre)- 1));
    $verbo=rand(0, (count($irregularVerbs) -1));
   
    echo '<br>';
echo $tiempo;
    
    echo '<br>';
echo $verbo;
    echo '<br>';
echo count($formaVerbalNombre);
    echo '<br>';
echo count($irregularVerbs);
    echo '<br>';
    
    $inglesVer = $irregularVerbs[$verbo][$tiempo]; //verbo en ingles 

    print($inglesVer);

$inglesVerLista = array_slice($irregularVerbs[$verbo], 0, 3);
echo '<br>';
    print_r($inglesVerLista);




?>