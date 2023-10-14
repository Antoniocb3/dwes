<?php
/**
 * Ficha personal con los datos cargados en variables (incluyendo una foto personal)
 */

// Variables 
$email = "antoniocb978@gmail.com";
$phone = "642157489";
$nombre = "Antonio";
$apellidos = "Carmona Bascón";
$github = "https://github.com/Antoniocb3";
$imagen = "Fotocurriculum.jpg"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Antonio Carmona Bascón</title>
</head>
<body>
    <div>
        <h1><?php echo $nombre. " " .$apellidos?></h1>
        <h2>PHP Developer</h2>
        <ul>
            <li>Mail:<?php echo $email?></li>
            <li>Phone:<?php echo $phone?></li>
            <li>GitHub: <?php echo "<a href=\"$github\">GitHub</a>"?></li>
            <li><img src="<?php echo $imagen?>" alt="Foto curriculum" width="150" height="170"></li>
        </ul>
    </div>
</body>
</html>
