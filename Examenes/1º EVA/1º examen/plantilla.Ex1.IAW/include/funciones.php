<?php
// FUNCIÓN esBisiesto
function esBisiesto($year){
   if((!($year%4) && ($year%100)) || !($year%400)){
      return TRUE;
   }else{
      return FALSE;
   }
}
?>
