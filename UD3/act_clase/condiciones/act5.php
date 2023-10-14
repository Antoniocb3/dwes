<?php
/**
 * Script que muestre una lista de enlaces en función del perfil de usuario:
 * Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
 * Perfil Usuario: Pagina1, Pagina2
 */

// Variables 
$perfil = "usuario";

if ($perfil != "admin" && $perfil != "usuario") {
    echo "El perfil introducido es erróneo";
}
elseif ($perfil == "admin") {
    echo '<html>
    <body>
        <ul>
            <li><a href="https://www.op.gg/summoners/euw/karmonabascon">Página 1</a></li>
            <li><a href="https://moodle.iesgrancapitan.org/login/index.php">Página 2</a></li>
            <li><a href="https://www.twitch.tv/">Página 3</a></li>
            <li><a href="https://agar.io/?">Página 4</a></li>
        </ul>
    </body>
    </html>';
}
else {
    echo '<html>
    <body>
        <ul>
            <li><a href="https://www.op.gg/summoners/euw/karmonabascon">Página 1</a></li>
            <li><a href="https://moodle.iesgrancapitan.org/login/index.php">Página 2</a></li>
        </ul>
    </body>
    </html>';
}


?>