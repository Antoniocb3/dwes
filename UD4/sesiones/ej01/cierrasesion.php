<?php
/**
 * 
 * 
 */

# Iniciar la sesion
session_start();

#Eliminar todas las variables de sesión
unset($_SESSION);

#Destruir la sesión
session_destroy();

header("Location: Inicio de sesion.php")
?>