<?php 
/**
 * Modifica la página inicial realizada, incluyendo una imagen de cabecera en función
 * de la estación del año en la que nos encontremos y un color de fondo en función de
 * la hora del día.
 */

//Variables
$horaDia = 1;
$estacion = "otoño";

if ($horaDia < 0 || $horaDia > 24) {
    echo "<h2>La hora introducida es errónea</h2>";
}
elseif ($horaDia >= 7 && $horaDia <= 16) {
    echo '<style>
    body {
        padding-top: 2%;
        text-align: center;
        background-color: rgb(65, 255, 175);
    }
    </style>
    <h1>Es por la mañana</h1>';
}
elseif ($horaDia > 16 && $horaDia <= 21) {
    echo '<style>
    body {
        padding-top: 2%;
        text-align: center;
        background-color: rgb(212, 164, 0);
    }
    </style>
    <h1>Es por la tarde</h1>';
}
else {
    echo '<style>
    body {
        padding-top: 2%;
        text-align: center;
        background-color: rgb(77, 76, 70);
    }
    </style>
    <h1>Es por la noche</h1>';
}


if ($estacion == "verano") {
    echo '</br><h2>Es verano</h2>
    <img src="https://img.freepik.com/foto-gratis/disposicion-elementos-naturaleza-muerta-verano_23-2148968974.jpg" alt="Verano">';
}
elseif ($estacion == "invierno") {
    echo '</br><h2>Es invierno</h2>
    <img src="https://i.pinimg.com/originals/5b/41/8e/5b418eb8bca42ac29a9167ad71b9f34d.jpg" alt="Ivierno">';
}
elseif ($estacion == "otoño") {
    echo '</br><h2>Es otoño</h2>
    <img src="https://image.freepik.com/vector-gratis/ninos-felices-dibujos-animados-jugando-fondo-otono_353337-77.jpg" alt="Otoño">';
}
elseif ($estacion == "primavera") {
    echo '</br><h2>Es primavera</h2>
    <img src="https://thumbs.dreamstime.com/b/fondo-de-primavera-con-arco-iris-arco%C3%ADris-nubes-hierba-del-sol-y-flores-cielo-azul-dibujos-animados-escena-paisaje-los-archivos-174670672.jpg" alt="Primavera">';
}
else {
        echo "<h2>La estación introducida es errónea</h2>";
    }
?>