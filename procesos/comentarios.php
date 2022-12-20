<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../librerias/PHPMailer/Exception.php';
require '../librerias/PHPMailer/PHPMailer.php';
require '../librerias/PHPMailer/SMTP.php';

$nombre= $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = nl2br($_POST['mensaje']) ;


/* print_r(2); */

//Filtro 1. Correo valido
$validar=10;
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    if (strlen($telefono)==$validar){
        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {

            //Server settings
            $mail->SMTPDebug = 0;                                       //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'navyescobar@gmail.com';              //SMTP username
            $mail->Password   = 'EscobaR012345';                           //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom($email, $nombre);
            $mail->addAddress('navyescobar@gmail.com', 'ESCORP');                 //Add a recipient

            //Content
            $mail->isHTML(true);                                        //Set email format to HTML
            $mail->Subject =  ' '.$asunto.' de '. $nombre. ' para ESCORP Drivers';
            $mail->Body    = '<!DOCTYPE html>
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
                                    <h1>ESCORP Drivers</h1>
                                </td>
                
                            </tr>
                
                        </thead>
                        <tbody>
                
                            <td style="text-align: justify; margin left: 20px; margin right: 20px;">
                
                                <br><br><br>
                                Estimado:
                                
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
                                <br>  '. $mensaje .'
                
                                <br><br>
                            </td>
                        </tbody>
                    </table>
                </body>
                
                </html>';

            $mail->send();
            echo 1;
        } catch (Exception $e) {
            echo '3', $mail->ErrorInfo;
        }
    }else{
        echo 2;  
    }
} else {
    echo 0;
}