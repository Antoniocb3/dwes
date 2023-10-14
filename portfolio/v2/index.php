<?php
/**
 * Ficha personal con los datos cargados en variables (incluyendo una foto personal)
 */

//Cargamos el fichero de configuración
include 'config/config.php';

//Cargamos contenido en variables
$email = $datos['email'];
$phone = $datos['telefono'];
$nombre = $datos['nombre'];
$apellidos = $datos['apellidos'];
$catprofesional = $datos['catprofesional'];
$redessociales = $datos['redessociales'];
$imagen = $datos['foto'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Antonio Carmona Bascón</title>
</head>
<body>
    <div>
        <h1><?php echo $nombre. " " .$apellidos?></h1>
        <h2><?php echo $catprofesional?></h2>
        <ul>
            <li>Mail: <?php echo $email?></li>
            <li>Phone: <?php echo $phone?></li>
            <?php
                foreach ($datos['redessociales'] as $red => $value) {
                echo "<li><a href=\"$value\">$red</a></li>";
            }
            ?>
            <li><img src="<?php echo $imagen?>" alt="Foto curriculum" width="150" height="170"></li>
        </ul>
    </div>
</body>
</html>
