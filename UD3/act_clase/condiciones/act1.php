<?php
/**
 * Almacena tres números en variables y escribelos en pantalla de forma ordenada 
 */

$num1 = 20;
$num2 = 14;
$num3 = 1;

if ($num1 <= $num2 && $num1 <= $num3) {
    echo $num1 . " ";
    if ($num2 <= $num3) {
        echo $num2 . " " . $num3;
    } else {
        echo $num3 . " " . $num2;
    }
} elseif ($num2 <= $num1 && $num2 <= $num3) {
    echo $num2 . " ";
    if ($num1 <= $num3) {
        echo $num1 . " " . $num3;
    } else {
        echo $num3 . " " . $num1;
    }
} elseif ($num3 <= $num2 && $num3 <= $num1) {
    echo $num3 . " ";
    if ($num1 <= $num2) {
        echo $num1 . " " . $num2;
    } else {
        echo $num2 . " " . $num1;
    }
}

?>