<?php
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

###########################################################################################

	#estas son las varibles del ejercio 4 
	function cajaFuerte($password) {

		if ($password == '1234') {

			#la contrasena es correcta 
			return TRUE;
		
		}

		#la contrasena no es correcta
		return FALSE;

	}

	function contador($contador = 0 ) {
		$contador++;
		return $contador;
	
	}

###########################################################################################

	# EJERCIO 5
	function randNumero($inicio = 1, $final =100) {

		$numero = rand($inicio, $final);
		return $numero;
		
	}

?>