<?php

class VistaCanciones
{

  public static function mostrarCanciones($token)
  {
    require_once('./vendor/autoload.php');

    $client = new \GuzzleHttp\Client();

    //Vendría del textarea
    include("cabecera.php");

    $response = $client->request('GET', 'http://192.168.0.16:3000/api/songs', [
      'headers' => [
        'Authorization' => $token,
        'accept' => 'application/json',
        'content-type' => 'application/json',
      ],
    ])->getBody();
    $respuesta = json_decode($response);
    echo '<br>';
    echo '<a href="enrutador.php?accion=mostrarTop" class="btn btn-warning">Top Rated</a>';
    echo '<div class="container">
      <table class="table table-striped">
      <thead>
      <tr>
        <th scope="col">Titulo</th>
        <th scope="col">Grupo</th>
        <th scope="col">Duracion</th>
        <th scope="col">Genero</th>
        <th scope="col">Fecha</th>
        <th scope="col">Puntos</th>
        <th scope="col">Puntua</th>
      </tr>
    </thead>
    <tbody>';

    foreach ($respuesta->songs as $cancion) {
      echo '       
        
          <tr>
            <td>' . $cancion->title . '</td>
            <td>' . $cancion->group . '</td>
            <td>' . $cancion->duration . '</td>
            <td>' . $cancion->gender . '</td>
            <td>' . $cancion->year . '</td>
            <td>' . $cancion->assessment . '</td>
            <td>
            
            <form action="enrutador.php" method="post" >
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="valoracion" id="inlineCheckbox1" value="1">
                <label class="form-check-label" for="inlineCheckbox1">1</label>
              </div>
              <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="valoracion" id="inlineCheckbox1" value="2">
              <label class="form-check-label" for="inlineCheckbox1">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="valoracion" id="inlineCheckbox1" value="3">
                <label class="form-check-label" for="inlineCheckbox1">3</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="valoracion" id="inlineCheckbox1" value="4">
                <label class="form-check-label" for="inlineCheckbox1">4</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="valoracion" id="inlineCheckbox1" value="5">
                <label class="form-check-label" for="inlineCheckbox1">5</label>
              </div>
              <td> <input type="hidden" name="id" value="'.$cancion->_id.'">
              <input type="hidden" name="accion" value="puntuar">
              <td> <button class="btn btn-success type="submit"">Puntua</button> </td>
              </form>
              </td>
              
          </tr>';
    }
    echo '
      </table>
      </div>
      </tbody>';
    include("pie.php");
  }
  /*-----------------------------------------------------------------------*/

  public static function mostrarTop($token)
  {
    require_once('./vendor/autoload.php');

    $client = new \GuzzleHttp\Client();

    include("cabecera.php");

    $response = $client->request('GET', 'http://192.168.0.16:3000/api/assessment/', [
      'headers' => [
        'Authorization' => $token,
        'accept' => 'application/json',
        'content-type' => 'application/json',
      ],
    ])->getBody();
    $respuesta = json_decode($response);
    echo '<br>';
    echo '<a href="enrutador.php?accion=mostrarCancion" class="btn btn-warning">Mostrar Canciones</a>';
    echo '<div class="container">
     <table class="table table-striped">
     <thead>
     <tr>
       <th scope="col">Titulo</th>
       <th scope="col">Grupo</th>
       <th scope="col">Duracion</th>
       <th scope="col">Genero</th>
       <th scope="col">Fecha</th>
       <th scope="col">Puntos</th>
     </tr>
   </thead>
   <tbody>';

    foreach ($respuesta->songs as $cancion) {
      echo '       
       
         <tr>
           <td>' . $cancion->title . '</td>
           <td>' . $cancion->group . '</td>
           <td>' . $cancion->duration . '</td>
           <td>' . $cancion->gender . '</td>
           <td>' . $cancion->year . '</td>
           <td>' . $cancion->assessment . '</td>
         </tr>';
    }
    echo '
     </table>
     </div>
     </tbody>';
    include("pie.php");
  }

  public static function actualizarPuntos($token,$id,$assessment) {
    require_once('./vendor/autoload.php');

    $client = new \GuzzleHttp\Client();

    $response = $client->request('PUT', 'http://192.168.0.16:3000/api/songs/'.$id.'',     
    [ 'body' => '{"assessment":"'.$assessment.'"}',
      'headers' => [
        'Authorization' => $token,
        'accept' => 'application/json',
        'content-type' => 'application/json',
      ],
    ])->getBody();
    $respuesta = json_decode($response,true);
    echo "<script>window.location='enrutador.php?accion=mostrarCancion';</script>";
  }
}
