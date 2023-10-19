<?php 
/**
 * 
 * 
 */


session_start();

$nombre = $_SESSION["nombre"] = 'Antonio';
$apellido = $_SESSION["apellido"] = 'Carmona';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antonio Carmona Bascón</title>
</head>
<body>
    <p><?php echo $nombre ?></p>
    <p><?php echo $apellido ?></p>
</body>
</html>