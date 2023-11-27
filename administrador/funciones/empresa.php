<?php

date_default_timezone_set('America/Mexico_City');

class empresa
{

    public function agregaTipoPersonas($datos, $id_personas)
    {

        $c = new conectar();
        $conexion = $c->conexion();

        $contador = 0;
        foreach ($id_personas as $id_persona) {
            $sql = "INSERT INTO cpersona 
                        (tipoPersona, fechaCaptura,registro) 
                        values( '$id_persona',
                                '$datos[0]',
                                '$datos[1]'
                                )";

            if (mysqli_query($conexion, $sql)) {
                $contador = $contador + 1;
            }
        }

        if ($contador >= 1) {
            return 1;
        } else {
            return 0;
        }

        //Antes de agregar el tipo de persona verifica que no se repitan
        /*  $sql = " SELECT tipoPersona
                        FROM cpersona 
                        WHERE tipoPersona='$id_personas[0]'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 0) {  //Si el tipo de persona ya existe no lo agrega
            return 2;
        } else {                            //Si el tipo de persona NO existe y no hay mas de 4 registros lo agrega
            $sql1 = "SELECT *
                        FROM cpersona";
            $result1 = mysqli_query($conexion, $sql1);
            $tamano = mysqli_num_rows($result1);
            //var_dump ($tamano);

            if ($tamano < 4) {
                $sql = "INSERT INTO cpersona 
                        (tipoPersona, fechaCaptura,registro) 
                        values( '$datos[0]',
                                '$datos[1]',
                                '$datos[2]'
                                )";

                if (mysqli_query($conexion, $sql)) {
                    return 1;                   //El tipo de persona se agrego correctamente
                } else {
                    return 0;                   //El tipo de persona NO se agrego correctamente
                }
            } else {
                return 3;                       //El número de registros máximo se alcanzó
            }
        } */
    }

    /* public function agregaTipoPersona($datos)
    {

        $c = new conectar();
        $conexion = $c->conexion();

        //Antes de agregar el tipo de persona verifica que no se repitan
        $sql = " SELECT tipoPersona
                        FROM cpersona 
                        WHERE tipoPersona='$datos[0]'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 0) {  //Si el tipo de persona ya existe no lo agrega
            return 2;
        } else {                            //Si el tipo de persona NO existe y no hay mas de 4 registros lo agrega
            $sql1 = "SELECT *
                        FROM cpersona";
            $result1 = mysqli_query($conexion, $sql1);
            $tamano = mysqli_num_rows($result1);
            //var_dump ($tamano);

            if ($tamano < 4) {
                $sql = "INSERT INTO cpersona 
                        (tipoPersona, fechaCaptura,registro) 
                        values( '$datos[0]',
                                '$datos[1]',
                                '$datos[2]'
                                )";

                if (mysqli_query($conexion, $sql)) {
                    return 1;                   //El tipo de persona se agrego correctamente
                } else {
                    return 0;                   //El tipo de persona NO se agrego correctamente
                }
            } else {
                return 3;                       //El número de registros máximo se alcanzó
            }
        }
    } */

    public function actualizaTipoPersona($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        //Antes de agregar el tipo de persona verifica que no se repitan
        $sql = " SELECT tipoPersona
                FROM cpersona 
                WHERE tipoPersona='$datos[1]'";
        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 0) {  //Si el tipo de persona ya existe no lo agrega
            return 2;
        } else {                            //Si el tipo de persona NO existe lo edita

            $sql1 = "UPDATE cpersona
                        SET tipoPersona='$datos[1]', 
                            fechaCaptura='$datos[2]',
                            registro='$datos[3]'
                        WHERE id_persona='$datos[0]'";

            if (mysqli_query($conexion, $sql1)) {
                return 1;                   //El tipo de persona se editó correctamente
            } else {
                return 0;                   //El tipo de persona NO se edito correctamente
            }
        }
    }

    public function eliminaTipoPersonas($id_personas)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $contador = 0;
        foreach ($id_personas as $id_persona) {
            $sql = "DELETE FROM cpersona
                        WHERE  id_persona='$id_persona'";
            if (mysqli_query($conexion, $sql)) {
                $contador = $contador + 1;
            }
        }

        if ($contador >= 1) {
            return 1;
        } else {
            return 0;
        }
    }

    //Elimina 1 registro a la vez
    /* public function eliminaTipoPersona($id_persona){
        $c= new conectar();
        $conexion=$c->conexion();

        $sql="DELETE FROM cpersona
                        WHERE  id_persona='$id_persona'";

        return mysqli_query($conexion,$sql);
    }  */
}
