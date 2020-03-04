<?php

require_once "mcript.php";
require_once "modelo.php";

/*----------------------------------------------------------------
// Como usar las funciones para encriptar y desencriptar.

$dato = "Meza";

//Encripta información:
$dato_encriptado = $encriptar($dato);

//Desencripta información:
$dato_desencriptado = $desencriptar($dato_encriptado);

echo 'Dato encriptado: '. $dato_encriptado . '<br>';
echo 'Dato desencriptado: '. $dato_desencriptado . '<br>';

echo "IV generado: " . $getIV();

-----------------------------------------------------------*/


if (isset($_POST["user"]) && isset($_POST["password"])) {

    echo "Usuario: ".$_POST["user"]."\n\n";
    $dato = $_POST["password"];

    //Encripta información:
    $dato_encriptado = $encriptar($dato);
    $dato_encriptado;

    // Enviar datos al modelo
    $tabla = "tbl_usuarios";
    $item = "usuario";
    $valor = $_POST["user"];

    $respuesta = Modelo::mdlLogin($tabla, $item, $valor);
    
    if ($respuesta["usuario"] == $_POST["user"] && $respuesta["contrasena"] == $dato_encriptado) {
        
        echo "BIENVENIDO :".$_POST["user"]."\n\n¡FELICIDADES, INGRESASTE CON ÉXITO!";

        header("Location: http://localhost/seguridad/logueado.php?error=false&mensaje='Logueado con éxito.'");
    }

    else {
        
        echo "¡Inténtalo de nuevo!";
        header("Location: http://localhost/seguridad/logueado.php?error=true&mensaje='No logueado u.u'");


    }

}



