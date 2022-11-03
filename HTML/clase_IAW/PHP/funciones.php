<?php 

    function arrayNumGen($longitud, $inicio=0,$final=100) {
        $array = array();
			
		for ($i = 0;$i < $longitud; $i++){
			$array[$i] = rand($inicio, $final);
		}

        return $array;
    }

    function maxMI($array) {
        $max = 0;
        foreach ($array as $i){	
            if ($i > $max) {
                $max = $i;
            }            
        }
        return $max;
    }

    function minMI($array) {    
        $min = $array[0];
        foreach ($array as $i){
            if ($i < $min) {
                $min = $i;
            }
        }
        return $min;
    }

    function sumMI(array $array){
        $sum = 0;
        for ($i=0 ;$i < count($array); $i++){
            $sum += $array[$i];
        }
        return $sum;
    }

    function ordenKeyValor($key, $valor) {
        
        if (count($key) != count($valor)) {
            return 'Esto estamal, miden diferente';
        }

        $list= array();

        for ($i=0; $i < count($key); $i++) { 
            $list[$key[$i]] = $valor[$i];
        }

        return $list;
    }

    function swap(&$x,&$y){

        $aux=$x;
        $x=$y;
        $y=$aux;
    
    }
?>