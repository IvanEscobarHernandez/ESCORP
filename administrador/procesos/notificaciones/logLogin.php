<?php

date_default_timezone_set('America/Mexico_City');

//hay diferencia de 1 hora con el servidor porque se quito el horario de verano en México
$fecha = date('Y-m-d H:i:s');
/* $fechaAjustada = strtotime('-1 hour, -1 day', strtotime($fecha));
$fechaAjustada = date('Y-m-d H:i:s', $fechaAjustada); */

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../../librerias/PHPMailer/Exception.php';
require '../../../librerias/PHPMailer/PHPMailer.php';
require '../../../librerias/PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //0 para no Debug, 1 y 2 para debug// Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.escorp.com.mx';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@escorp.com.mx';                     //SMTP username
    $mail->Password   = 'EscobaR012345.';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    /* $mail->SMTPSecure = 'tsl'; */
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    /* $mail->Port       = 587; */ 

    //Recipients
    $mail->setFrom('info@escorp.com.mx', 'ESCORP');
    $mail->addAddress('escobarhernandezivan@gmail.com', 'Ivan Escobar');     //Add a recipient
    $mail->addAddress('info@escorp.com.mx');               //Name is optional
    /* $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com'); */

    //Attachments
    /* $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name */

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Resumen diario de Login ' . $fecha . '';
    ob_start();
    include( "tablaLogin.php" );
    $mail->Body = ob_get_clean(); 
    $mail->CharSet = 'UTF-8';

    $mail->send();
    echo 'Enviado correctamente';
    die();
} catch (Exception $e) {
    echo "Error al enviar: {$mail->ErrorInfo}";
    die();
}
