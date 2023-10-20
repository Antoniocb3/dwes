<?php
/**
 * Ficha personal con los datos cargados en variables (incluyendo una foto personal)
 */

// Cargamos el fichero de configuración
include 'config/config.php';

// Cargamos contenido en variables
$email = $datos['email'];
$phone = $datos['telefono'];
$nombre = $datos['nombre'];
$apellidos = $datos['apellidos'];
$catprofesional = $datos['catprofesional'];
$redessociales = $datos['redessociales'];
$imagen = $datos['foto'];
$trabajos = $datos['trabajos'];
$proyectos = $datos['proyecto'];
$skills = $datos['skills'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo $nombre . " " . $apellidos ?></title>
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
        
        <h3>Trabajos Anteriores</h3>
        <ul>
            <?php
            foreach ($trabajos as $trabajo) {
                if ($trabajo['visible']) {
                    echo "<li>";
                    echo "<h4>{$trabajo['titulo']}</h4>";
                    echo "<p>{$trabajo['descripcion']}</p>";
                    echo "<p>Fecha de inicio: {$trabajo['fechaInicio']}</p>";
                    echo "<p>Fecha de finalización: {$trabajo['fechaFinal']}</p>";
                    echo "<p>Logros: " . implode(', ', $trabajo['logros']) . "</p>";
                    echo "</li>";
                }
            }
            ?>
        </ul>
        
        <h3>Proyectos</h3>
        <ul>
            <?php
            foreach ($proyectos as $proyecto) {
                echo "<li>";
                echo "<h4>{$proyecto['titulo']}</h4>";
                echo "<p>{$proyecto['descripcion']}</p>";
                echo "<p>Tecnologías utilizadas: {$proyecto['tecnologías']}</p>";
                echo "</li>";
            }
            ?>
        </ul>
        
        <h3>Habilidades</h3>
        <ul>
            <?php
            foreach ($skills as $skill) {
                echo "<li>";
                echo "<h4>{$skill['categoría']}</h4>";
                echo "<p>Habilidades: " . implode(', ', $skill['habilidades']) . "</p>";
                echo "</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
