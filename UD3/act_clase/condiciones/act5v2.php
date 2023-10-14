<?php
$perfil = "admin";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Fernandez Espana</title>
</head>
<body>
    <center>
        <ul>
        <?php
        if ($perfil == "admin") {
            echo ("<li><a href=\"https://www.futbolfantasy.com/laliga/equipos/barcelona\">Link Pagina 1</a></li>");
            echo ("<li><a href=\"https://www.futbolfantasy.com/laliga/equipos/girona\">Link Pagina 2</a></li>");
            echo ("<li><a href=\"https://www.futbolfantasy.com/laliga/equipos/betis\">Link Pagina 3</a></li>");
            echo ("<li><a href=\"https://www.futbolfantasy.com/laliga/equipos/osasuna\">Link Pagina 4</a></li>");

        }elseif($perfil == "usuario"){
            echo ("<li><a href=\"https://www.futbolfantasy.com/laliga/equipos/barcelona\">Link Pagina 1</a></li>");
            echo ("<li><a href=\"https://www.futbolfantasy.com/laliga/equipos/girona\">Link Pagina 2</a></li>");
        }
        else {
            echo "El perfil introducido es erróneo";
        }
        ?>
        </ul>
    </center>
</body>

</html>