<?php

/* Servidor */
class conectar
{
    private $server = "162.241.61.130";
    private $user = "escorpco_iescobaradmin";
    private $password = "EscobaR012345.";
    private $bd = "escorpco_escorpbd";

    public function conexion()
    {
        $conexion = mysqli_connect($this->server, $this->user, $this->password, $this->bd);
        $conexion->set_charset('UTF8');
        return $conexion;
    }
}

/* local */
/* class conectar{
    private $servidor ="localhost";
    private $nombreusuario ="root";
    private $password ="";
    private $bd="escorpco_escorpbd";

    public function conexion(){
        $conexion = mysqli_connect ($this->servidor, $this->nombreusuario, $this->password, $this->bd);
        $conexion ->set_charset('UTF8');
        return $conexion;
    }
} */

//Probar conexión 2 (Mensaje si se establece)
/* $obj=new conectar ();
    if( $obj->conexion() ){
         echo "Conectado";
    } */

class cerrarSesion
{

    //Método
    public function cerrarSesiones($user)
    {
        date_default_timezone_set('America/Mexico_City');

        $c = new conectar();
        $conexion = $c->conexion();

        //echo $user.",";

        $sql = "SELECT id_login, max(fechaLogin) as fechaMaxima
                        FROM logLogin
                        WHERE idUsuario='$user' ";
        $result = mysqli_query($conexion, $sql);
        $row = mysqli_fetch_array($result);
        //var_dump ($row);

        //Muestra todos los registros
        /* while ($row=mysqli_fetch_array($result)) {
            echo ($row ["id_login"] . ",". $row ["fechaLogin"] . "<br />");
        } */

        //Muestra la fecha y hora de la ultima conexión de este usuario y la convierte en un formato dateTime
        $fechaUltimaConexion = $row['fechaMaxima'];
        $fechaUltimaConexion = new DateTime($fechaUltimaConexion);
        /* var_dump($fechaUltimaConexion); */

        //Calcula la fecha y hora actual y la convierte en un formato dateTime
        $fecha = new DateTime('-1 hour'); //hay diferencia de 1 hora con el servidor porque se quito el horario de verano en México
        /* var_dump($fecha); */

        //Determina el tiempo activo de su sesion
        $intervalo = date_diff($fechaUltimaConexion, $fecha)->format("%d:%h:%i:%s");
        var_dump($intervalo);

        //Si el tiempo activo es mayor a 4 hrs destruye su sesión
                        //(dias : horas : min : seg)
        if ($intervalo > "0:1:0:0") {
            session_unset();
            session_destroy();
        }
    }

    // $obj = new cerrarSesion($user);
    //echo $obj->cerrarSesiones($user);
}
