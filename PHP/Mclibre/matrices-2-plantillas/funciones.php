<?php include "irregular-verbs-list.php"; ?>
<?php 

$formaVerbalNombre = ["infinitivo", "pasado", "participio"];

$tiempo=rand(0, (count($formaVerbalNombre)- 1));
$verbo=rand(0, (count($irregularVerbs) -1));


$formaVerbalNombre[$tiempo]; 
$irregularVerbs[$verbo][3]; 
$irregularVerbs[$verbo][$tiempo];
 
?>