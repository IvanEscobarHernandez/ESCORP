<?php
date_default_timezone_set('America/Mexico_City');
session_start();

        require_once "funciones/conexion.php";
        $c = new conectar();
        $conexion = $c->conexion();

        $user=$_SESSION['idUser'];

        //Obtener el número de la última consulta
        $sql = "SELECT id_login, max(fechaLogin) as fechaMaxima
                        FROM logLogin
                        WHERE idUsuario='$user' ";
        $result= mysqli_query($conexion, $sql);
        $row=mysqli_fetch_array($result);

        //Muestra todos los registros
        /* while ($row=mysqli_fetch_array($result)) {
            echo ($row ["id_login"] . ",". $row ["fechaLogin"] . "<br />");
        } */

        //Muestra la fecha y hora de la ultima conexión de este usuario y la convierte en un formato dateTime
        $fechaUltimaConexion= $row['fechaMaxima'];
        $fechaUltimaConexion=new DateTime($fechaUltimaConexion);
        /* var_dump($fechaUltimaConexion); */

        //Calcula la fecha y hora actual y la convierte en un formato dateTime
        $fecha = new DateTime('-1 hour'); //hay diferencia de 1 hora con el servidor porque se quito el horario de verano en México
        /* var_dump($fecha); */

        //Determina el tiempo activo de su sesion
        $intervalo = date_diff($fechaUltimaConexion,$fecha)->format("%d:%h:%i:%s");
        /* var_dump($intervalo); */

        //Si el tiempo activo es mayor a 4 hrs destruye su sesión
                        //(dias : horas : min : seg)
        if ($intervalo > "0:4:0:0") {
            session_unset();
            session_destroy();
        }
    

if (isset($_SESSION['user'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio </title>
        
    </head>

    <body>
    </body>

    </html>

<?php
} else {
    header("location:index.php");
}

?>