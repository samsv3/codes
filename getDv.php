<?php

/*calculate digit verifier of a rut*/
function getDv($cRut){
    
    $rut = (string)$cRut;
    $factor = 2;
    $suma = 0;
        		    
    for($i = strlen($rut) - 1; $i >= 0; $i--) {
        $suma += $factor * $rut[$i];
        $factor = $factor % 7 == 0 ? 2 : $factor + 1;
    }
        
    $dv = 11 - $suma % 11;
    $dv = $dv == 11 ? 0 : ($dv == 10 ? "K" : $dv);
    return $dv;
}
       
?>