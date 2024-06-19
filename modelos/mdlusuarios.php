<?php
require_once "conexion.php";
class modelo_usuarios{
    public static function mdllogin ($user, $pass){
        $stm = conexion::conectar()->prepare("SELECT * FROM usuarios WHERE usuario=:user AND contrasenia=:pass");
        $stm->bindParam(":user", $user, PDO::PARAM_STR);
        $stm->bindParam(":pass", $pass, PDO::PARAM_STR);
        $stm->execute();
        return $stm->fetch();
    }
} 