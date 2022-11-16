<?php
	function recoge($var, $m = "")
	{
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
?>