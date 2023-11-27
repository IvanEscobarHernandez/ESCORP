<?php
session_start();

require_once "funciones/conexion.php";
$user = $_SESSION['idUser'];

//Cierra sesion despues de cierto tiempo
$obj = new cerrarSesion($user);
/* echo $obj->cerrarSesiones($user); */

if (isset($_SESSION['user'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio </title>
        <?php
        require_once "menu.php";
        ?>
    </head>

    <body>

    </body>

    </html>

<?php
} else {
    header("location:index.php");
}

?>