<?php
/**
 * Funcion para limpiar datos de entrada 
 * parametro: cadena procedente de un fornulari
 * return: cadena limpia
 */

function test_input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$aGenero = array("Hombre", "Mujer", "Otro");
$genderErr = "";

// Definimos las variables tipo text con valor inicial, en este caso a cadena vacia
$name = $email = $gender = $comment = $website = "";

//Declarar variables error para las restricciones de las entradas$nameErr = $emailErr = $websiteErr = "";
$nameErr = $emailErr = $websiteErr = "";

//Variable para los Movilidad
//array de opciones
$aVehiculos = array('Bici', 'Coche', 'Patinete');

//array con las opciones seleccionadas
$aVehiculosSeleccionados = array();


$aOpciones = array(
    array("valor" => 1, "literal" => "Opcion 1"),
    array("valor" => 2, "literal" => "Opcion 2"),
    array("valor" => 3, "literal" => "Opcion 3"),
    array("valor" => 4, "literal" => "Opcion 4"),
);
$opcionSeleccionada = 1;

//Variables para marcas de coches
$aMarcas = array("Renault", "Mercedes", "Citroen", "Volvo", "Seat");
$aMarcasSeleccionadas = array();

$lprocesarFormulario = false;
$lerror = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lprocesarFormulario = true;

    //Validar nombre
    if (empty($_POST["name"])) {
        $nameErr = "El nombre es obligatorio";
        $lerror = true;
    } else {
        $name = test_input($_POST["name"]);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato email incorrecto";
            $lerror = true;
        }
    }


    //Validar email
    if (empty($_POST["email"])) {
        $nameErr = "El email es obligatorio";
        $lerror = true;
    } else {
        $name = test_input($_POST["email"]);
    }

    //Validar URL
    $website = test_input($_POST["website"]);

    //Validar comentario
    $comment = test_input($_POST["comment"]);

    //Validar género
    if (empty($_POST["gender"])) {
        $nameErr = "El género es obligatorio";
        $lerror = true;
    } else {
        $gender = $_POST["gender"];
    }

    //Vehículos
    if (isset($_POST['vehicle'])) {
        $aVehiculosSeleccionados = $_POST['vehicle'];
    }

    //Lista desplegable
    if (isset($_POST['combo'])) {
        $opcionSeleccionada = $_POST['combo'];
    }

    //Marcas
    if (isset($_POST['marcas'])) {
        $aMarcasSeleccionadas = $_POST['marcas'];
    }
}
if ($lerror) {
    $lprocesarFormulario = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antonio Carmona Bascón</title>
    <style>
        .error {color: red;}
    </style>
</head>
<body>
    <?php
    if (!$lprocesarFormulario) { ?>
        <h1>Validacion formulario. PHP</h1>
        <p><span class="error">* Campos requeridos..</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Nombre:<input type="text" name="name" value="<?php echo $name;?>">
                   <span class="error">*<?php echo $nameErr;?></span><br><br/>
            email: <input type="text" name="email" value="<?php echo $email;?>">
                   <span class="error">*<?php echo $emailErr;?></span><br><br/>
            URL:   <input type="text" name="website" value="<?php echo $website;?>">
                   <span class="error">*<?php echo $websiteErr;?></span><br><br/>
            Comentario:</br>
                <textarea name ="comment" rows=""5 cols="40"><?php echo $comment;?></textarea></br>
            Género:
                <?php
                    foreach ($aGenero as $clave => $valor) {
                        $check ="";
                        if ($gender == $valor) {$check = "checked";}
                            echo "<input type=\"radio\" name=\"gender\" value = \"$valor\" $check>$valor";
                    }
                    echo "<span class=\"error\">* $genderErr</span></br>"
                ?>
            <br>
            Transporte:
                <?php
                    foreach ($aVehiculos as $valor) {
                        $selected =(in_array($valor,$aVehiculosSeleccionados)) ? 'checked' : '';
                        echo "<input type=\"checkbox\" name=\"vehicle[]\" value = \"".$valor."\" $selected>".$valor;
                    }
                ?>
            <br><br/>
            Selecciona opción:
                    <select name="combo">
                        <?php
                            foreach ($aOpciones as $valor) {
                                $selected = ($opcionSeleccionada == $valor["valor"]) ? "selected" :"";
                                echo "<option value=\"".$valor["valor"]."\"$selected>".$valor["literal"]."</option>";
                            }
                        ?>
                    </select>
                <br>
                <input type="button" value="enviar">
    </form>
    <?php }?>
    
</body>
</html>