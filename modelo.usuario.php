<?php 

require_once "conexion.php";

class ModeloUsuarios {

    static public function mdlMostrarUsuario($tabla, $item, $valor) {

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
