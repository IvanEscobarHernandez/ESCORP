<?php

date_default_timezone_set('America/Mexico_City');

//hay diferencia de 1 hora con el servidor porque se quito el horario de verano en México
$fecha = date('Y-m-d H:i:s');

session_start();


require_once "../../funciones/conexion.php";
require_once "../../funciones/empresa.php";

//Eliminar multirples solo regsitros
$id_personas = $_POST['ids_array'];


/* print_r($id_personas); */
$obj = new empresa();
echo $obj->eliminaTipoPersonas($id_personas);


    //Elimina 1 registro a la vez
        /* $id_persona=$_POST['id_persona'];


    print_r($id_persona);
    $obj = new empresa();
    echo $obj->eliminaTipoPersona($id_persona); */
