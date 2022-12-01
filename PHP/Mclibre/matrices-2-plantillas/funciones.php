<?php include "irregular-verbs-list.php"; 
use LDAP\Result; // que es esto? ?>
<?php 


$formaVerbalNombre = ["infinitivo", "pasado", "participio"];
function tiemposVerboIngles($numVerbos = 1)
{
    include "irregular-verbs-list.php";

    $tiempo=rand(0, (count($formaVerbalNombre)- 1));
    $verbo=rand(0, (count($irregularVerbs) -1));
    
    
    $tiempoVer = $formaVerbalNombre[$tiempo]; //tiempo verbal
    $castellanoVer = $irregularVerbs[$verbo][3]; // verbo en castellano
    $inglesVer = $irregularVerbs[$verbo][$tiempo]; //verbo en ingles 
    
    if ($numVerbos == 1 ){

        $verboLista = [$tiempoVer, $castellanoVer,  $inglesVer];

    } else {

        $inglesVerLista = array_slice($irregularVerbs[$verbo], 0, 3);
        
        $verboLista = [$tiempoVer, $castellanoVer,  $inglesVer, $inglesVerLista ];

    }

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

<?php function solcuion($respuesta, $verboIngles, $tiempoVerbal,$spanisVerbal ) {
    if ($respuesta == $verboIngles) { ?>

        <p>¡Respuesta correcta!</p>

    <?php } else { ?>

        <p>¡Respuesta incorrecta!</p>

    <?php } ?>

    <p>El <strong><?= $tiempoVerbal;?></strong> de <strong><?= $spanisVerbal;?></strong> es <strong><?= $verboIngles; ?></strong>.</p>
<?php } ?>
