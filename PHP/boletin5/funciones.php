<?php 

    function arrayNumeros($longitud){
        $array1 = array();
			
		for ($i = 0;$i < $longitud; $i++){
			$array1[$i] = rand(0, 100);
		}

        return $array1;
    };

    #print_r(arrayNumeros(10));
?>