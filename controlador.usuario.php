<?php 

require_once('libreria.php');
require_once('modelo.usuario.php');

class ControladorUsuarios {
    
    static public function ctrLogin(){

        if (isset($_POST['username']) && isset($_POST['password'])){

            $encriptar = Libreria::encrypt($_POST['password'], 'password');
            // this yields a binary string 
            echo $encriptar."\n";
            
            // ENVIAR DATOS AL MODELO
            $tabla = "tbl_usuarios";
            $item = "usuario";
            $valor = $_POST['username'];

            $respuesta = ModeloLogin::mdlMostrarUsuarios($tabla, $item, $valor);

            // VALIDAR LA RESPUESTA
            if ($respuesta["usuario"] == $_POST["username"] && $respuesta["password"] == $encriptar){

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


