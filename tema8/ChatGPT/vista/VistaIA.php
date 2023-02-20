<?php

class VistaIA
{

    public static function mostrarIA($texto)
    {
      require_once('../vendor/autoload.php');
      
      $client = new \GuzzleHttp\Client();
      
      //Vendría del textarea
      include("./vista/cabecera.php");

      $textoArticulo = "Escribe un artículo sobre " . $texto;
      
      $response = $client->request('POST', 'https://api.openai.com/v1/completions', [
        'body' => '{"model": "text-davinci-003", "prompt": "'.$textoArticulo.'", "temperature": 0, "max_tokens": 1000, "n": 1}',
        'headers' => [
          'Authorization' => 'Bearer',
          'accept' => 'application/json',
          'content-type' => 'application/json',
        ],
      ]);
      
      $respuesta = $response->getBody();
      
      $respuestaJSON = json_decode($respuesta);
      
      $articuloTexto =  $respuestaJSON->choices[0]->text;
      echo $articuloTexto ;
      echo "<br>";
      
      $textoImagen = $texto;
      $response = $client->request('POST', 'https://api.openai.com/v1/images/generations', [
        'body' => '{"prompt": "'.$textoImagen.'", "size": "1024x1024", "n": 1}',
        'headers' => [
          'Authorization' => 'Bearer ',
          'accept' => 'application/json',
          'content-type' => 'application/json',
        ],
      ]);
      
      $respuesta = $response->getBody();
      
      $respuestaJSON = json_decode($respuesta);
      

      $img =  $respuestaJSON->data[0]->url;

      echo ' <div class="container">
      <div class="card mb-3">
      <img class="card-img-top" src="'.$img .'" height="905px" width="180px"  alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">'.$texto.'</h5>
        <p class="card-text">'.$textoArticulo.'</p>
      </div>
      </div>
    </div>';
            
      echo '
      <center> <p><a href="./enrutador.php?accion=mostrarArticulo">Nuevo Articulo</a></p>
               <p><a href="./enrutador.php?accion=guardarArticulo&titulo='.$texto.'&texto='.$articuloTexto.'&imagen='.urlencode($img).'">Guardar Articulo</a></p>
      </center>';
      include("./vista/pie.php");
    }
   
}

