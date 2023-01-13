<?php
function tiradaDados($numDados = 1) {
    
    $resultados = [];
    
    for ($i=0; $i < $numDados  ; $i++) { 
        
        $resultados[$i] = rand(1,6);

    }    
    
    return $resultados;

}


?>