<?php

/* $destino = "comentarios@escorp.com.mx"; */
$cuenta = $_POST["cuenta"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$asunto = $_POST["asunto"];
$mensaje = nl2br($_POST['mensaje']);

$validar = 10;
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    if (strlen($telefono) == $validar) {

        $para  = 'comentarios@escorp.com.mx' . ', '; // atención a la coma
        $para .= 'escobarhernandezivan@gmail.com';

        // título
        $título = '' . $asunto . ' de ' . $nombre . ' para ' . $cuenta . '';

        // mensaje
        $mensaje = '
            <!DOCTYPE html>
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
                    
                                    <td style="text-align: center; background-color:black ; color:white; font-weight:bold;">
                                        <h1>ESCORP</h1>
                                    </td>
                    
                                </tr>
                    
                            </thead>
                            <tbody>
                    
                                <td style="text-align: justify; margin left: 20px; margin right: 20px;">
                    
                                    <br><br><br>
                                    Estimado:

                                    <br><br>
                                    Ha recibido un comentario de la cuenta: 
                                    <br><b> ' . $cuenta . ' </b> 
                                    
                                    <br><br>
                                    Ha recibido un comentario de parte del cliente: 
                                    <br><b> ' . $nombre . ' </b> 
                    
                                    <br><br><br><br>
                                    <b>Contacto</b>
                                    <br><br>
                                    <b>Email:</b>  
                                    <br>' . $email . '  

                                    <br><br>
                                    <b>Telefono:</b>   
                                    <br>' . $telefono . ' 

                                    <br><br>
                                    <b>Mensaje:</b>
                                    <br>  ' . $mensaje . '
                    
                                    <br><br>
                                </td>
                            </tbody>
                        </table>
                    </body>
                    
                    </html>
            ';

        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Cabeceras adicionales
        /* $cabeceras .= 'To: Ivan <navyescobar@gmail.com>' . "\r\n"; */
        $cabeceras .= 'From: ESCORP <comentarios@escorp.com.mx>' . "\r\n";


        // Enviarlo
        $enviado = mail($para, $título, $mensaje, $cabeceras);

        if ($enviado) {
            echo 1;
        } else {
            echo 0;
        }
    } else {
        echo 3;
    }
} else {
    echo 2;
}
?>