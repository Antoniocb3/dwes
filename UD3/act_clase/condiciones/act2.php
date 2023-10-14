<?php 
/**
 * Carga en variables mes y año e indica el número de días del mes. Utiliza switch
 */

$mes = 2;
$anio = 2024;
$nDias = 31; // Inicializamos la variable a 31

switch ($mes) {
    case 2:
        $nDias = 28;
        # Sumamos 1 si es bisiesto
        if ($anio % 4 == 0 and ($anio % 100 != 0 or $anio % 400 == 0)) {
            $nDias++;
        } 
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $nDias = 30;
        break;
    
}
/**
 * VISTA
 */
echo 'El mes ' . $mes . ' del año ' . $anio . ' tiene ' . $nDias . ' días';
?>