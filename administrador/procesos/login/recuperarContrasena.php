<?php

/* $destino = "comentarios@escorp.com.mx"; */
$email = $_POST["email"];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    require_once "../../funciones/conexion.php";
    $c = new conectar();
    $conexion = $c->conexion();

    $sql = " SELECT password, usuario, nombre, apellidos
                    from usuarios 
                    where email='$email'";
    $result = mysqli_query($conexion, $sql);
    $consulta = mysqli_num_rows($result);

    //Filtro 2. El correo existe y esta ligado a un usuario
    if ($consulta > 0) {

        $result1 = mysqli_fetch_row($result);
        $password = $result1[0];
        $usuario = $result1[1];
        $nombre = $result1[2] . ' ' . $result1[3];

        $para  = 'info@escorp.com.mx' . ', '; // atención a la coma
        $para .= $email;

        // título
        $título = ' Correo de recuperación de contraseña para ' . $nombre . '';

        // mensaje
        $mensaje =
            '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>

            <table style=" border: 2px solid black; width:100%; ">
                <thead>
                    <tr>
        
                        <td style="width: 100px;">
                            <img src="https://www.escorp.com.mx/img/ESCORP/logoCorreo.jpg" style="width: 100px; height:100px;">
                        </td>
        
                        <td style="text-align: center; background-color:black ; color:white; font-weight:bold; height:100px; padding:0;">
                            <h1>ESCORP</h1>
                        </td>
        
                        <td></td>
                    </tr>
        
                </thead>
                <tbody>
        
                    <td></td>
        
                    <td style="text-align: justify;">
        
                        <br><br><br>
                        Estimado ' . $nombre . ': 
                        
                        <br><br>
                        Le notificamos que la petición de su contraseña se ha realizado de manera satisfactoria.
        
                        <br><br><br>
                        <div style="font-weight: bold;">Usuario: </div> ' . $usuario . '
        
                        <br><br>
                        <div style="font-weight: bold;">Contraseña: </div> ' . $password . '
        
        
                        <br><br><br>
                        Si usted NO lo ha solicitado, repórtelo de inmediato a su administrador.
        
                        <br><br><br>
                        <div style=" color: gray;font-style: italic;">Este mensaje se ha creado de manera automatica, favor de no responder a esta dirección de correo electrónico.</div>
                        <br><br>
                    </td>
                </tbody>
            </table>
        </body>
        
        </html>';

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Cabeceras adicionales
        /* $cabeceras .= 'To: Ivan <navyescobar@gmail.com>' . "\r\n"; */
        $cabeceras .= 'From: ESCORP <info@escorp.com.mx>' . "\r\n";


        // Enviarlo
        $enviado = mail($para, $título, $mensaje, $cabeceras);

        if ($enviado) {
            echo 1;
        } else {
            echo 3;
        }
    } else {
        echo 2;
    }
} else {
    echo 0;
}
