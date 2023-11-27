<?php

date_default_timezone_set('America/Mexico_City');

//hay diferencia de 1 hora con el servidor porque se quito el horario de verano en México
//Solo usar para local, el servidor va bien

$fecha = date('Y-m-d H:i:s');
/* $fechaAjustada = strtotime ( '-1 hour' , strtotime ($fecha) ) ; 
$fechaAjustada = date ( 'Y-m-d H:i:s' , $fechaAjustada); */ 

    session_start();
    
    require_once "../../funciones/conexion.php";
    require_once "../../funciones/usuarios.php"; 

    $datos=array( 
        $_POST['usuario'],
        $_POST['password'],
        $fecha
    );

    /* print_r($datos); */
    $obj= new usuarios();
    echo $obj->loginUser($datos);

?>