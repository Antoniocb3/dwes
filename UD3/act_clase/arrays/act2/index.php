<?php
/**
 * Crea el cuadrado de unos números dados en un array
 */


$aNumeros = array(1,2,3,4,5);

echo "<br>Cuadrado de los números<br/>";
$aCuadrados = array_map(function ($n) {
    return $n*$n;
}, $aNumeros);

print_r($aCuadrados)
?>