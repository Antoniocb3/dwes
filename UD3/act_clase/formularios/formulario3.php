<?php

/**
 * Formulario con datos en array
 * @author Carmona Bascón Antonio
 */

$info = array("nombre", "apellidos")

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antonio Carmona Bascón</title>
</head>
<body>
    <form action = "consultar_formulario3.php" method="post">
        <?php
        foreach ($info as $value) {
            echo '<input type="text" name="' . $value . '" placeholder="' . $value . '" value=""/>';
            echo '</br>';
        }
        ?>
        <input type="submit" name="enviar" value="Send"/>
    </form>
</body>
</html>