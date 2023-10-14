<?php 
/**
 * Cargamos la fecha de nacimiento en variables y calculamos la edad
 */

$dia = 28;
$mes = 9;
$anio = 2000; // Inicializamos la variable a 31

$diahoy = date("d");
$meshoy = date("m");
$aniohoy = date("Y");


$edad = $aniohoy - $anio;
if ($mes > $meshoy or $dia > $diahoy) {
    $edad--;
}

print $edad
?>