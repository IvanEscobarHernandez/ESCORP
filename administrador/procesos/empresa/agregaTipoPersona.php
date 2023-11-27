<?php

date_default_timezone_set('America/Mexico_City');

//hay diferencia de 1 hora con el servidor porque se quito el horario de verano en México
$fecha = date('Y-m-d H:i:s');

session_start();


require_once "../../funciones/conexion.php";
require_once "../../funciones/empresa.php";



$datos=array( 
    $fecha,
    $registro= $_SESSION['idUser']
);

$id_personas =$_POST['ids_arrayPersonas'];
$id_personas = array_map('strtoupper', $id_personas);

/* print_r($id_personas); */
$obj = new empresa();
echo $obj->agregaTipoPersonas($datos,$id_personas);

    /* $datos=array( 
        $tipoPersona=mb_strtoupper($_POST['tipoPersona']),
        $fecha,
        $registro= $_SESSION['idUser']
    ); */

    /* print_r($datos); */
   /*  $obj = new empresa();
    echo $obj->agregaTipoPersona($datos); */
