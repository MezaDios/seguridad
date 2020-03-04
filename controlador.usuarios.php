<?php 

require_once('libreria.php');
require_once('modelo.usuarios.php');

// var_dump("HOLA CONTROLADOR");

class ControladorUsuarios {
    
    static public function ctrLogin(){

        if (isset($_POST['username']) && isset($_POST['password'])){

            echo "BIENVENIDO \n";
            echo $_POST['username']."\n";
            echo $_POST['password']."\n";


            $encriptar = Libreria::encrypt($_POST['password'], 'password');
            // this yields a binary string 
            echo "clave: ".$encriptar."\n";
            
            // ENVIAR DATOS AL MODELO
            $tabla = "tbl_usuarios";
            $item = "usuario";
            $valor = $_POST['username'];

            // var_dump($tabla);

            $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

            var_dump($respuesta);

            // VALIDAR LA RESPUESTA
            if ($respuesta["usuario"] == $_POST["username"] && $respuesta["contrasena"] == $encriptar){

                echo "USUARIO LOGEADO EXITOSAMENTE";

                echo '<script>

                    swal({
                        type: "success",
                        title: "¡Felicidades: Login realizado con éxito!",
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar",
                        closeOnConfirm: false						               
                    });

                </script>';

            }
                        
        }

    }



}

// echo decrypt($encrypted, 'password');
            // decrypt($encrypted, 'wrong password') === null


/*
*https://stackoverflow.com/questions/3422759/php-aes-encrypt-decrypt/30166085#30166085
Autor blade, oct 22, 2017.
*/


