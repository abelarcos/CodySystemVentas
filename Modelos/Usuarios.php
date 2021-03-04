<?php

require_once "Conexion.php";

class Usuarios{

    //Mostrar Usuarios
    static public function MostrarUsuarios($tabla, $item, $valor){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
        $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();

    }

}

