<?php
/**
 * 
 * @author Antonio Carmona Bascón
 */

session_start();
if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
}
if (!isset($_POST['pulsa'])) {
    $_SESSION["count"] ++;
    echo $_SESSION["count"];
}
$_SESSION['intervaloTime'] = 1;

if (isset($_SESSION['inicioTime'])) {
    $tiempo_transcurrido = time();
    /*se multiplica por 60 segundos ya que se configura en minutos*/
    $tiempo_maximo = $_SESSION['inicioTime'] + ($_SESSION['intervaloTime'] * 10);
    
    if ($tiempo_transcurrido > $tiempo_maximo) {
        header("Location: salir.php");
    } else {
        /*se resetea el inicio*/
        $_SESSION['inicioTime'] = time();
    }
} else {
    /*Si no existe se crea o si lo prefiere destruya la sesión*/
    $_SESSION['inicioTime'] = time();
}
$_SESSION['inicioTime'] = time();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antonio Carmona Bascón</title>
</head>

<body>
    <form action="" method="post">
        <input type="submit" value="pulsa" name="Pulsa">
    </form>

</body>

</html>