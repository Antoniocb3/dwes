<?php
/**
 * Tablas de multiplicar del 1 al 10. Aplicar estilos en filas/columnas
 */

$cantidadInputs = 4;
for ($i = 0; $i < $cantidadInputs; $i++) {
    $num1 = random_int(1, 9);
    $num2 = random_int(1, 9);
    $aNumAleatorios[] = array($num1, $num2);
}

// if ($x = $aNumAleatorios[0][0] && $y = $aNumAleatorios[0][1])

foreach ($aNumAleatorios as $paresNumeros) {
    echo "(" . $paresNumeros[0] . ", " . $paresNumeros[1] . ")"; // if $paresNumeros[0] == i && $paresNumeros[1] == j
}

 echo "<table border='solid'>";
 for ($i = 1; $i <= 10; $i++) { // i = filas 
     echo "<tr>";
     for ($j = 1; $j <= 10; $j++) {
         if ($i == 1 || $j == 1) {
             echo "<td style='background-color: cyan;'>" . ($i * $j) . "</td>";
         } else {
             echo "<td>" . ($i * $j) . "</td>";
         }
     }
     echo "</tr>";
 }
 echo "</table>"

?>