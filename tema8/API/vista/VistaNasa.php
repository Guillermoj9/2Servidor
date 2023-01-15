<?php

class VistaNasa
{

    public static function mostrarNasa()
    {


        include "cabecera.php";

        echo "<div class='container'>";

        echo "<div class='row'>";

        $key = "NeWgeW3blgwLRvcJoO1SsHpBpoqGBac9hSRL69VV";


        $uri = "https://api.nasa.gov/planetary/apod?api_key=" . $key ; // ''&count=5

        $resultado = file_get_contents($uri, false);

        //Pasar de json a objeto php y recorrer los resultados
        if ($resultado != false) {
            $respPHP = json_decode($resultado);

            }
           echo '
            
            
                <div class="card mb-3">
               
                <div class="card-body">
                  <h2 class="card-title">' . $respPHP->title . '</h2>
                  <img src="' . $respPHP->hdurl . '" class="card-img-top" alt="..." >
                  <p class="card-text">' . $respPHP->explanation . '</p>
                  <p class="card-text"><small class="text-muted">' . $respPHP->date . '</small></p>
                
                  
                </div>
              </div>              
      ';
          
      //
    }
}

