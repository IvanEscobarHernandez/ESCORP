<?php

date_default_timezone_set('America/Mexico_City');

//hay diferencia de 1 hora con el servidor porque se quito el horario de verano en México
$fecha = date('Y-m-d H:i:s');

    session_start();

    
    require_once "../../funciones/conexion.php";
    require_once "../../funciones/empresa.php"; 

    $datos=array( 
        $id_personaU=mb_strtoupper($_POST['id_personaU']),
        $tipoPersonaU=mb_strtoupper($_POST['tipoPersonaU']),
        $fecha,
        $registro= $_SESSION['idUser']
    );

   /*  print_r($datos); */
    $obj = new empresa();
    echo $obj->actualizaTipoPersona($datos);

?>