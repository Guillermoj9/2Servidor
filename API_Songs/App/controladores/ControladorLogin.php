<?php
    class ControladorLogin {

        public static function mostrarFormularioLogin() {
            VistaLogin::mostrarFormularioLogin("");
        }

        public static function mostrarFormularioLoginError() {
            VistaLogin::mostrarFormularioLogin("Error de login, prueba otra vez");
        }


        public static function chequearLogin($email, $password) {
            require_once('vendor/autoload.php');
            $client = new \GuzzleHttp\Client();
            $_SESSION['token']=null;

            $response = $client->request('POST', 'http://192.168.0.16:3000/api/login', [
                'body' => '{"email":"'.$email.'","password":"'.$password.'"}',
                'headers' => [
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                ],
            ]);
     
            $respuesta = $response->getBody();
            $registro = json_decode($respuesta, true);

            //Error login
            if ($registro == "Incorrecto") {
                echo "<script>window.location='enrutador.php?accion=error';</script>";
            //Login correcto
            }else {
                $_SESSION['token']=$registro;
                echo "<script>window.location='enrutador.php?accion=mostrarCancion';</script>";
            }
               

        }


    }

?>