<?php
require_once("conexion.php");
class modeloClientes
{
    public static function mdlGuardarClientes($tabla, $data){

        $stm = conexion::conectar()->prepare("INSERT INTO $tabla (cedula, nombres, apellidos, direccion, sexo, correo, telefono, f_nacimiento) VALUES (:cedula, :nombres, :apellidos, :direccion, :sexo, :correo, :telefono, :f_nacimiento)");
        $stm->bindParam(':cedula', $data['cedula'], PDO::PARAM_STR);
        $stm->bindParam(':nombres', $data['nombres'], PDO::PARAM_STR);
        $stm->bindParam(':apellidos', $data['apellidos'], PDO::PARAM_STR);
        $stm->bindParam(':direccion', $data['direccion'], PDO::PARAM_STR);
        $stm->bindParam(':sexo', $data['sexo'], PDO::PARAM_STR);
        $stm->bindParam(':correo', $data['correo'], PDO::PARAM_STR);
        $stm->bindParam(':telefono', $data['telefono'], PDO::PARAM_STR);
        $stm->bindParam(':f_nacimiento', $data['f_nacimiento'], PDO::PARAM_STR);
        if ($stm->execute()) {
            echo "<script>console.log('if: " . json_encode($data) . "' );</script>";
            return "ok";
        } else {
            return "error";
        }
    }

    //Función para cargar de la base de datos
    public static function mdlCargarClientes($tabla, $id_cliente){
        if ($id_cliente == 0) {
            $stm = conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stm->execute();
            return $stm->fetchAll();
        }else{
            $stm = conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_clientes=:id_clientes");
            $stm->bindParam(":id_clientes", $id_cliente, PDO::PARAM_INT);
            $stm->execute();
            return $stm->fetch();
        }
    }

    public static function mdlModificarClientes($tabla, $data){
        $stm = conexion::conectar()->prepare("UPDATE $tabla SET nombres=:nombres, apellidos=:apellidos, direccion=:direccion, sexo=:sexo, correo=:correo, telefono=:telefono, f_nacimiento=:f_nacimiento WHERE id_clientes=:id_clientes");
        $stm->bindParam(':nombres', $data['nombres'], PDO::PARAM_STR);
        $stm->bindParam(':apellidos', $data['apellidos'], PDO::PARAM_STR);
        $stm->bindParam(':direccion', $data['direccion'], PDO::PARAM_STR);
        $stm->bindParam(':sexo', $data['sexo'], PDO::PARAM_STR);
        $stm->bindParam(':correo', $data['correo'], PDO::PARAM_STR);
        $stm->bindParam(':telefono', $data['telefono'], PDO::PARAM_STR);
        $stm->bindParam(':f_nacimiento', $data['f_nacimiento'], PDO::PARAM_STR);
        $stm->bindParam(':id_clientes', $data['id_clientes'], PDO::PARAM_STR);
        if ($stm->execute()) 
            return "ok";
        else 
            return "error";
    }
}
