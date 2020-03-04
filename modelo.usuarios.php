<?php 

require_once "conexion.php";

// var_dump("HOLA MODELO");


class ModeloUsuarios {

    static public function mdlMostrarUsuarios($tabla, $item, $valor) {

        if ($item != null) {
			
			$stmt = Conexion::conectar()->prepare("SELECT * from $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		} else {

            return "Error";

        }

    }
    
}
