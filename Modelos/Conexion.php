<?php

class Conexion {

    public function conectar(){

        $conexion = new PDO("mysql:host=localhost;dbname=codysystemventas","root", "");
        $conexion->exec("set names utf8");

        return $conexion;
    }

}