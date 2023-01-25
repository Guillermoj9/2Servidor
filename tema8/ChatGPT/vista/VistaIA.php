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
          'Authorization' => 'Bearer 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',
          'accept' => 'application/json',
          'content-type' => 'application/json',
        ],
      ]);
      
      $respuesta = $response->getBody();
      
      $respuestaJSON = json_decode($respuesta);
      
      echo $respuestaJSON->choices[0]->text;
      echo "<br>";
      
      $textoImagen = $texto;
      $response = $client->request('POST', 'https://api.openai.com/v1/images/generations', [
        'body' => '{"prompt": "'.$textoImagen.'", "size": "1024x1024", "n": 1}',
        'headers' => [
          'Authorization' => 'Bearer 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',
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
      
      echo "<p><button type='button' class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#nuevoArticulo'>
       Guardar articulo
      </button></p>" ;
      
      echo '
      <center> <button class="btn btn-dark" href="./VistaArticulo.php" type="submit">Crear articulo</button></center>';
      include("./vista/pie.php");
    }
   
}

