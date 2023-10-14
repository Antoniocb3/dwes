<?php
/**
 * 10.Pon ejemplo de uso de la sintaxis heredoc en el manejo de cadenas.
 */

// Heredoc se comporta de la misma forma que las comillas dobles pero tiene diferente
// sintaxis

$hola = <<<EOD
Prueba de
sintaxis
Heredoc
EOD;

echo $hola;
?>
