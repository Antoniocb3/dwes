<?php
/**
 * Suma los 3 primeros números pares
 * 
 * author: Antonio Carmona Bascón
 * fecha: 29/09/2023  
 */


$num = 2;
$sumaPares = 0;
$cantidadPares = 3;

for ($i=0; $i < $cantidadPares ; $i++) { 
    echo $num . ' ';
    $sumaPares += $num;
    $num += 2;
}

echo "<br/> La suma es " . $sumaPares;

?>