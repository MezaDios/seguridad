<?php 

require_once "conexion.php";

class Modelo {

    static public function mdlLogin($tabla, $item, $valor) {

        if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

            return $stmt -> fetch();
            
        }

        else {

            return "Error";

        }

        $stmt -> close();

        $stmt = null;

    }
    
}

