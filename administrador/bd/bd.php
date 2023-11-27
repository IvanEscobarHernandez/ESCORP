<?php
/* servidor */
$server = "162.241.61.130";
$user = "escorpco_iescobaradmin";
$password = "EscobaR012345.";
$bd = "escorpco_escorpbd1";

$conexion = new mysqli($server, $user, $password, $bd);
if ($conexion->connect_error) {
	die("Conexión fallida: " . $conexion->connect_error);
}else{
    echo "conectado"."<br><br>";
}

/* local */
/* $server = "localhost";
$user = "root";
$password = "";
$bd = "escorpco_escorpbd";

$conexion = new mysqli($server, $user, $password, $bd);
if ($conexion->connect_error) {
	die("Conexión fallida: " . $conexion->connect_error);
}else{
    echo "conectado"."<br><br>";
} */

//Creacion de las tablas

/* $sql1 = "CREATE TABLE usuarios(
    id_usuario int auto_increment,
    nombre varchar(50),
    apellidos varchar(50),
    usuario varchar (50),
    empresa varchar (50),
    perfil varchar (50),
    email varchar(50),
    telefono varchar(50),
    password varchar(50),
    fechaCaptura date,
    primary key(id_usuario)
)"; */

/* $sql2 = "CREATE TABLE logLogin(
    id_login int auto_increment,
    idUsuario int not null,
    fechaLogin datetime,
    primary key(id_login)
)"; */

/* $sql3 = "CREATE TABLE empresas(
    id_empresa int auto_increment,
    nombreEmpresa varchar(50),
    razonSocial varchar(50),
    nombreEmpresa varchar(50),
    RFC varchar(50),
    direccion varchar(50),
    id_imagen int(999),
    fechaCaptura date,
    primary key(id_empresa)
)"; */

$sql4 = "CREATE TABLE cpersona(
    id_persona int auto_increment,
    tipoPersona varchar(50),
    fechaCaptura datetime,
    registro int,
    primary key(id_persona)
)";


/* if ($conexion->query($sql1) === true) {
	echo "Las tabla Usuarios se creo correctamente..."."<br><br>";
} else {
	die("Error al crear tabla Usuarios: " . $conexion->error . "<br><br>");
} */

/* if ($conexion->query($sql2) === true) {
	echo "Las tabla login se creo correctamente..."."<br><br>";
} else {
	die("Error al crear tabla login: " . $conexion->error . "<br><br>");
} */

/* if ($conexion->query($sql3) === true) {
	echo "Las tabla empresas se creo correctamente..."."<br><br>";
} else {
	die("Error al crear tabla empresas: " . $conexion->error . "<br><br>");
} */

/* if ($conexion->query($sql4) === true) {
	echo "Las tabla tipo de persona tipo de persona se creo correctamente..."."<br><br>";
} else {
	die("Error al crear tabla tipo de persona : " . $conexion->error . "<br><br>");
} */
?>