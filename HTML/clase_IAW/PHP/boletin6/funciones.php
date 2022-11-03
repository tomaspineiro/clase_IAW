<?php 
    include('../funciones.php');

    function stringAint($string) {
        if (is_string($string) == false) {
            return 'el valor inroducido no es un string.';
        }
        $n = 0; 
        for ($i=0; $i < strlen($string) ; $i++) { 
            
            switch ($string[$i]) {
                case 0:
                    $n = $n . 0;
                    break;
                case 1:
                    $n .=  1;
                    break;
                case 2:
                    $n = $n . 2;
                    break;
                case 3:
                    $n = $n . 3;
                    break;
                case 4:
                    $n = $n . 4;
                    break;
                case 5:
                    $n = $n . 5;
                    break;
                case 6:
                    $n = $n . 6;
                    break;
                case 7:
                    $n = $n . 7;
                    break;
                case 8:
                    $n = $n . 8;
                    break;
                case 9:
                    $n = $n . 9;
                    break;
                default:
                    return 'contien una letra';
            }
        }
        return $n;
    }
    
    function generadorSwitch($long,$var){
        echo "switch($$var){";

        for ($i=0; $i < $long ; $i++) { 
            echo "&nbsp;&nbsp;&nbsp;&nbsp;case $i: </br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; #code...;</br>
            &nbsp;&nbsp;&nbsp;&nbsp&;nbsp;&nbsp;&nbsp;&nbsp;break;</br>";
        }
        echo "&nbsp;&nbsp;&nbsp;&nbsp&;default:</br>
        &nbsp;&nbsp;&nbsp;&nbsp&;&nbsp;&nbsp;&nbsp;&nbsp& #code..;   </br>
        }"; 
    }

    function dniCorrecto($dni) {
        $letra = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E',);
        if ((strlen($dni) != 9)	or (in_array($dni[8],$letra) == 0)) {
            return false;
        }
        $dniCorto = cortarDNI($dni);
        $dniNum = stringAint($dniCorto);
        $comprobador = $dniNum % 23; 
        if ($letra[$comprobador] == $dni[8]){
            return true;
        
        } else {
            return false;
        }
    }

    function cortarDNI($dni){
        $nDNI = '';
        for ($i=0; $i < 8; $i++) { 
            $nDNI .=$dni[$i];
        }
        return $nDNI;
    }

    function eurosPesta($euros){
				
        define('PESETAS', 166.386);
        
        $pesetas = floatval($euros) * PESETAS;
        
        return round($pesetas, 2);

    }

    function stringSoloNumeros($string){
        
        $num = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.');

        for ($i=0 ;$i < strlen($string); $i++){
            if ((in_array($string[$i], $num)) == FALSE) {
                return FALSE; 
            }
        }

        return TRUE;
    }
?>