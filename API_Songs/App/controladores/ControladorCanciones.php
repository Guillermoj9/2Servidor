<?php
class ControladorCanciones
{
    //Mostrar canciones
    public static function mostrarCanciones($token)
    {
        VistaCanciones::mostrarCanciones($token);
    }
    //Mostrar top canciones
    public static function mostrarTop($token){
        VistaCanciones::mostrarTop($token);
    }
    public static function puntuar($token,$id, $assessment){

        VistaCanciones::actualizarPuntos($token,$id, $assessment);
    }
}
