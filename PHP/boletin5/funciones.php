<?php 

    function arrayNumeros($longitud, $inicio=0,$final=100){
        $array1 = array();
			
		for ($i = 0;$i < $longitud; $i++){
			$array1[$i] = rand($inicio, $final);
		}

        return $array1;
    };

    #print_r(arrayNumeros(10));
?>