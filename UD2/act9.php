<?php
/**
 * Escribir un script que utilizando variables permita obtener el siguiente resultado
 * Valor es string.
 * Valor es double.
 * Valor es boolean.
 * Valor es integer.
 * Valor is NULL.
 */

// Variables
$v1 = "hola mundo";
$v2 = 13243546574839209112;
$v3 = true;
$v4 = 12;
$v5 = null;


echo "Valor es " . gettype($v1);
echo "<br/>";
echo "Valor es " . gettype($v2);
echo "<br/>";
echo "Valor es " . gettype($v3);
echo "<br/>";
echo "Valor es " . gettype($v4);
echo "<br/>";
echo "Valor es " . gettype($v5);

echo '<a href="https://github.com/Antoniocb3/dwes/blob/main/UD2/act9.php">Código en GitHub</a>';

?>
