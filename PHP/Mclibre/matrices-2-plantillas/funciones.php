<?php include "irregular-verbs-list.php"; 
use LDAP\Result; // que es esto? ?>
<?php 


$formaVerbalNombre = ["infinitivo", "pasado", "participio"];
function tiemposVerboIngles()
{
    include "irregular-verbs-list.php";

    $tiempo=rand(0, (count($formaVerbalNombre)- 1));
    $verbo=rand(0, (count($irregularVerbs) -1));
    
    
    $tiempoVer = $formaVerbalNombre[$tiempo]; //tiempo verbal
    $castellanoVer = $irregularVerbs[$verbo][3]; // verbo en castellano
    $inglesVer = $irregularVerbs[$verbo][$tiempo]; //verbo en ingles 
    
    $verboLista = [$tiempoVer, $castellanoVer,  $inglesVer];

    return $verboLista;

}

function recoge($var, $m = "")  {
	
    $tmp = is_array($m) ? [] : "";
    if (isset($_REQUEST[$var])) {
        if (!is_array($_REQUEST[$var]) && !is_array($m)) {
            $tmp = trim(htmlspecialchars($_REQUEST[$var]));
        } elseif (is_array($_REQUEST[$var]) && is_array($m)) {
            $tmp = $_REQUEST[$var];
            array_walk_recursive($tmp, function (&$valor) {
                $valor = trim(htmlspecialchars($valor));
            });
        }
    }
    return $tmp;
}

?>