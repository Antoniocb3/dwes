<?php
/**
 * Cual es la salida del siguiente script:
 * Modificalo para que las palabras DAW y DWES aparezcan en negrita y explica el uso de print y printf
 */

// salida del script
$ciclo = "DAW";
$modulo = "DWES";
print "<p>";
printf("%s es un módulo de %d curso de %s", $modulo, 2, $ciclo);
print "</p>";

print "<p>";
print "Para que las palabras salgan en negrita seria utilizando la etiqueta <b>b</b>";
print "<br>";
printf("<b>%s</b> es un módulo de %d curso de <b>%s</b>", $modulo, 2, $ciclo);
print "</p>";

print "<p>";
print "<b>El uso de 'print' y 'printf' es el siguiente:</b>";
print "<br>";
printf("<b>print</b> es una función que se utiliza para imprimir una sola cadena de texto en la pantalla y <b>
printf</b> es una función que se utiliza para formatear una cadena de texto y luego imprimir el resultado en la pantalla.");
print "</p>"

?>
