<?php
class conexion{
    public static function conectar(){
        $con = new PDO("mysql:host=localhost;dbname=super_mercado;charset=utf8","root","");
        return $con;
    }
}