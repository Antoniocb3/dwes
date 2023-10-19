<?php
/**
 * 
 * @author Antonio Carmona
 */

$name = "";
$paswd = "";

if (isset($_COOKIE["name"])) {
    $name = $_COOKIE["name"];
    $passwd = $_COOKIE["passwd"];
}

if (isset($_POST["submit"])) {
    if (isset($_POST["remindMe"])) {
        setcookie("name", $_POST["name"], time()+3600);
        setcookie("name", $_POST["passwd"], time()+3600);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antonio Carmona Bascón</title>
</head>
<body>
    <form method="post">
        <label>User: </label>
        <input type="text" name="name" value="<?php echo $name ?>"><br>
        <label>Password: </label>
        <input type="text" name="passwd" value="<?php echo $passwd ?>"><br>
        <input type="checkbox" name="remindMe" id="remindMe">
        <label>Remind me</label><br>
        <input type="button" name="submit" value="Sumbit" >
    </form>
    
</body>
</html>