<?php
date_default_timezone_set('America/Mexico_City');

class usuarios
{

    //////////// Funcion: guarda los datos que vienen de registra usuario (del registro) en la db usuarios///////////
    /* public function registroUsuario($datos){
            $c = new conectar();
            $conexion = $c->conexion();

            $fecha = date('Y-m-d');
            $sql = "INSERT INTO usuarios        (nombre,
                                                apellido,
                                                apellido2,
                                                usuario,
                                                permiso,
                                                email,
                                                telefono,
                                                password,
                                                fechaCaptura) 
                        values( '$datos[0]',
                                '$datos[1]',
                                '$datos[2]',
                                '$datos[3]',
                                '$datos[4]',
                                '$datos[5]',
                                '$datos[6]',
                                '$datos[7]',
                                '$fecha'
                                )";

            //Verifica que el usuario, email y telefono no se repita y que el email sea valido
            $sql2 = " SELECT usuario
                            from usuarios 
                            where usuario='$datos[3]'";
            $result2 = mysqli_query($conexion, $sql2);
            $datos2 = mysqli_fetch_all($result2);
            
            if (mysqli_num_rows($result2) > 0) {
                foreach ($datos2 as $v){
                    if($v[0]===$datos[3]){
                        return 2;
                    }else{
                        $usuarioRepetido=0;
                    }
                }
                
            }else{
                $usuarioRepetido=0;
            }

            $sql3 = " SELECT email
                            from usuarios 
                            where email='$datos[5]'";
            $result3 = mysqli_query($conexion, $sql3);
            
            if (mysqli_num_rows($result3) > 0) {
                return 3;
            }else{
                $emailRepetido=0;
            }

            if (filter_var($datos[5], FILTER_VALIDATE_EMAIL)) {
                $correoInvalido = 0;
            }else{
                return 4;
            }

            $sql4 = " SELECT telefono
                            from usuarios 
                            where telefono='$datos[6]'";
            $result4 = mysqli_query($conexion, $sql4);
            
            if (mysqli_num_rows($result4) > 0) {
                return 5;
            }else{
                $numeroRepetido=0;
            }

            $numero=$datos[6];
            $validar=10;
            if (strlen($numero)!=$validar){
                return 6;
            }else{
                $numeroInvalido=0;
            }


            if ($usuarioRepetido == 0 && $emailRepetido == 0 && $numeroRepetido == 0 && $correoInvalido == 0 && $numeroInvalido == 0) {
                if (mysqli_query($conexion, $sql)) {
                    return 1;
                }
            }
        }

        public function registraUsuarios($datos){
            $c = new conectar();
            $conexion = $c->conexion();

            $fecha = date('Y-m-d');

            //Verifica que el usuario, email y telefono no se repita y que el email sea valido
             $sql2 = " SELECT usuario
                            from usuarios 
                            where usuario='$datos[3]'";
            $result2 = mysqli_query($conexion, $sql2);
            
            if (mysqli_num_rows($result2) > 0) {
                return 2;
            }else{
                $usuarioRepetido=0;
            }

            $sql3 = " SELECT email
                            from usuarios 
                            where email='$datos[5]'";
            $result3 = mysqli_query($conexion, $sql3);
            
            if (mysqli_num_rows($result3) > 0) {
                return 3;
            }else{
                $emailRepetido=0;
            }

            if (filter_var($datos[5], FILTER_VALIDATE_EMAIL)) {
                $correoInvalido = 0;
            }else{
                return 4;
            }

            $sql4 = " SELECT telefono
                            from usuarios 
                            where telefono='$datos[6]'";
            $result4 = mysqli_query($conexion, $sql4);
            
            if (mysqli_num_rows($result4) > 0) {
                return 5;
            }else{
                $numeroRepetido=0;
            }

            $numero=$datos[6];
            $validar=10;
            if (strlen($numero)!=$validar){
                return 6;
            }else{
                $numeroInvalido=0;
            }

            
            if ($usuarioRepetido == 0 && $emailRepetido == 0 && $numeroRepetido == 0 && $correoInvalido == 0 && $numeroInvalido == 0) {
                $sql2 = "INSERT INTO usuarios(
                                        nombre,
                                        apellido,
                                        apellido2,
                                        usuario,
                                        permiso,
                                        email,
                                        telefono,
                                        password,
                                        alta,
                                        fechaCaptura) 
                        values( '$datos[0]',
                        '$datos[1]',
                        '$datos[2]',
                        '$datos[3]',
                        '$datos[4]',
                        '$datos[5]',
                        '$datos[6]',
                        '$datos[7]',
                        '$datos[8]',
                        '$fecha'
                        )";
                return mysqli_query($conexion, $sql2);
                    
            }
        } */

    //////////// Funcion: busca los datos que vienen de login en la db usuarios para poder acceder///////////
    public function loginUser($datos)
    {

        $c = new conectar();
        $conexion = $c->conexion();

        $_SESSION['user'] = $datos[0];
        $idUser = $_SESSION['idUser'] = self::traeID($datos);

        $sql = " SELECT * from usuarios 
                            where usuario='$datos[0]'
                            and password='$datos[1]'";

        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 0) {

            $sql = "INSERT INTO logLogin 
                            (idUsuario, fechaLogin) 
                            values( '$idUser',
                                    '$datos[2]'
                                    )";

            if (mysqli_query($conexion, $sql)) {
                return 1;
            }
        } else {
            return 0;
        }
    }

    //////////// Funcion: guarda los datos que vienen de registra usuario (del registro) en la db usuarios///////////
    public function traeID($datos)
    {
        $c = new conectar();

        $conexion = $c->conexion();

        $sql = " SELECT  id_usuario
                            from usuarios 
                        where usuario='$datos[0]'
                        and password='$datos[1]' ";     //si no se desea encriptar quitar $password (borrar arriba) y solo poner $datos[1]

        $result = mysqli_query($conexion, $sql);

        return mysqli_fetch_row($result)[0];
    }

    //////////// Funcion: guarda los datos que vienen de registra usuario (del registro) en la db usuarios///////////
    /* public function traePermisos($datos){
            $c = new conectar();

            $conexion = $c->conexion();

            $password = $datos[1];  //No encripa el password en la bd

            $sql = " SELECT  perfil
                            from usuarios 
                        where usuario='$datos[0]'
                        and password='$password' ";     //si no se desea encriptar quitar $password (borrar arriba) y solo poner $datos[1]

            $result = mysqli_query($conexion, $sql);

            return mysqli_fetch_row($result)[0];
        } */

    /* public function obtenerDatosUsuarios($iduser){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="SELECT    id_usuario,
                            nombre,
                            apellido,
                            apellido2,
                            usuario,
                            permiso,
                            email,
                            telefono,
                            password
                    FROM usuarios
                    WHERE id_usuario='$iduser'";

            $result=mysqli_query($conexion,$sql);

            $ver=mysqli_fetch_row($result);

            $datos=array(
                        "id_usuario" => $ver[0],
                        "nombre" => $ver[1],
                        "apellido" => $ver[2],
                        "apellido2" => $ver[3],
                        "usuario" => $ver[4],
                        "permiso" => $ver[5],
                        "email" => $ver[6],
                        "telefono" => $ver[7],
                        "password" => $ver[8],
                    );

            return $datos;
        } */

    /* public function actualizaUsuarios($datos){
            $c= new conectar();
            $conexion=$c->conexion();
                
                $sql2 = " SELECT * 
                            from usuarios 
                            where id_usuario !='$datos[0]'";
                $result2 = mysqli_query($conexion, $sql2);
                $datos2 = mysqli_fetch_all($result2);
                // print_r($datos2);

                $usuarioRepetido=0;
                foreach ($datos2 as $v){
                    if($v[4]==$datos[4]){
                        $usuarioRepetido=$usuarioRepetido+1;
                    }
                }
                
                if ($usuarioRepetido!=0) {
                    return 2;
                }
            
                if (filter_var($datos[6], FILTER_VALIDATE_EMAIL)) {
                    $correoInvalido = 0;
                }else{
                    return 3;
                }

                $emailRepetido=0;
                foreach ($datos2 as $v){
                    if($v[6]==$datos[6]){
                        $emailRepetido=$emailRepetido+1;
                    }
                }
                
                if ($emailRepetido!=0) {
                    return 4;
                }

                $numero=$datos[7];
                $validar=10;
                if (strlen($numero)!=$validar){
                    return 5;
                }else{
                    $numeroInvalido=0;
                }

                $numeroRepetido=0;
                foreach ($datos2 as $v){
                    if($v[7]==$datos[7]){
                        $numeroRepetido=$numeroRepetido+1;
                    }
                }
                
                if ($numeroRepetido!=0) {
                    return 6;
                }

                //Verifica que no se repita usuario, email, telefono y que sean validos
                if ($usuarioRepetido == 0 && $emailRepetido == 0 && $numeroRepetido == 0 && $correoInvalido == 0 && $numeroInvalido == 0) {
                    $sql="UPDATE usuarios
                        SET nombre='$datos[1]',
                            apellido='$datos[2]',
                            apellido2='$datos[3]',
                            usuario='$datos[4]',
                            permiso='$datos[5]',
                            email='$datos[6]',
                            telefono='$datos[7]',
                            password='$datos[8]',
                            alta='$datos[9]',
                            fechaCaptura='$datos[10]'

                        WHERE id_usuario='$datos[0]'";

                    return mysqli_query($conexion,$sql);
                }
            
        } */

    /* public function eliminaUsuario($iduser){
            $c= new conectar();
            $conexion=$c->conexion();

            $sql="DELETE FROM usuarios
                            WHERE  id_usuario='$iduser'";

            return mysqli_query($conexion,$sql);
        } */
}
