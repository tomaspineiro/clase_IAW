<?php 

    function arrayNumeros($longitud, $inicio=0,$final=100) {
        $array1 = array();
			
		for ($i = 0;$i < $longitud; $i++){
			$array1[$i] = rand($inicio, $final);
		}

        return $array1;
    };

    function arrayOrden($array) {
        $long = count($array);
			
		foreach($array as $i){
				
			for ($j=0; $j < ($long - 1); $j++) {
					
				if ($array[$j] > $array[$j + 1]) {
						
					$guardar = $array[$j];
					$array[$j] = $array[$j + 1]; 
					$array[$j + 1] = $guardar;
						
				};					
			}			
		}
        return $list;
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
    
    
    /*
        $temperaturas = arrayNumeros(12, 13, 28);
		$meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

        $clima = ordenKeyValor($meses, $temperaturas);
        print_r($clima);

        echo '</br>';
        echo '</br>';
        $lista = arrayNumeros(10);
        print_r($lista);
        echo '</br>';
        $orenada = arrayOrden($lista);
        print_r($orenada);
    */
?>