<?php

require_once "../../funciones/conexion.php";
$c = new conectar();
$conexion = $c->conexion();

date_default_timezone_set('America/Mexico_City');

//Fecha actual (hay diferencia de 1 hora con el servidor porque se quito el horario de verano en México)
$fecha = date('Y-m-d H:i:s');
$fechaAjustada = strtotime ( '-1 hour' , strtotime ($fecha) ) ; 
$f1 = date ( 'Y-m-d H:i:s' , $fechaAjustada); 

//Fecha de un día antes
$fecha2 = date('Y-m-d H:i:s');
$fechaAjustada2 = strtotime ( '-1 hour, -1 day' , strtotime ($fecha2) ) ; 
$f2 = date ( 'Y-m-d H:i:s' , $fechaAjustada2); 

//Trae los registros del día y la hora que se detona en automativo menos 1 ( de 7 am de ayer a 7am de hoy) 
$sql = "SELECT e.idEmpresa,u.usuario,u.nombre, u.apellidos,fechaLogin FROM logLogin l
        INNER JOIN usuarios u
        ON l.idUsuario = u.id_usuario
        INNER JOIN empresas e
        ON u.idEmpresa = e.id_empresa
        where fechaLogin BETWEEN '$f2' AND '$f1'";
$result = mysqli_query($conexion, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" typehref="../css/Administrador/tablaCorreo.css">
    <title>Document</title>
</head>

<body>

    <table style=" border: 2px solid black; border-collapse:collapse; width:100%; ">
        <thead>
            <tr style="background:black;">

                <td style="width: 100px; height:100px; padding:0%; margin:0%;">
                    <img src="https://www.escorp.com.mx/img/ESCORP/logoCorreo.jpg" style="height:100%;">
                </td>

                <td style="text-align: center; background-color:none ; color:white; font-weight:bold;">
                    <h1>ESCORP Admin</h1>
                </td>

                <td></td>
            </tr>

        </thead>
        <tbody style="position:relative; top:20px;">

            <td></td>

            <td style="text-align: justify;">

                <div style=" margin:15px 0px">El detalle de Login se genero correctamente.</div>

                <table class="table table-hover table-condensed table-bordered" style="text-align:center;" id="tablaConsultaPrincipal">

                    <thead style="background:black; color:white;">
                        <tr>
                            <td>Empresa</td>
                            <td>Usuario</td>
                            <td>Nombre</td>
                            <td>Fecha</td>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($ver = mysqli_fetch_row($result)) : ?>
                            <tr>
                                <td><?php echo $ver[0]; ?> </td>
                                <td><?php echo $ver[1]; ?></td>
                                <td><?php echo $ver[2] . $ver[3]; ?></td>
                                <td><?php echo $ver[4]; ?></td>
                            </tr>

                        <?php endwhile; ?>
                    </tbody>

                </table>

                <div style=" color: gray;font-style: italic; margin-top:15px">Este mensaje se ha creado de manera automatica, favor de no responder a esta dirección de correo electrónico.</div>

            </td>
        </tbody>
    </table>
</body>

</html>