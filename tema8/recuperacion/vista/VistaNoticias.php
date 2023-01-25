<?php

class VistaNoticias
{

  public static function verJuegoDetalle($id)
  {
    include "cabecera.php";
    echo "<div class='container'>";

    echo "<div class='row'>";


    //$uri = "https://api.themoviedb.org/3/genre/tv/list?language=es&".$key;       
    $uri = "https://store.steampowered.com/api/appdetails?appids=" . $id;

    $resultado = file_get_contents($uri, false);

    //$totalPaginas=0;
    //Pasar de json a objeto php y recorrer los resultados
    if ($resultado != false) {
      $respPHP = json_decode($resultado);


      foreach ($respPHP as $juego) {

        echo "
                  <h1>Juego</h1>
                    <div class='card' >
                    <img src='" . $juego->data->header_image . "' class='card-img-top' alt='...'>
                    <div class='card-body'>
                      <h3 class='card-title'>" . $juego->data->name . "</h3>        
                      <h5 class='card-title'>" . $juego->data->short_description . "</h5>  
                      <h5 class='card-title'> Edad minima " . $juego->data->required_age . "</h5>                      
                    </div>
                  </div>
                  ";
      }
    }
  }



  public static function mostrarNoticias($id, $comentario)
  {




    echo "<div class='container'>";

    echo "<div class='row'>";

    $key = "api_key=a74c122b22807a76b7637ac1407a045e";

    //$uri = "https://api.themoviedb.org/3/genre/tv/list?language=es&".$key;       
    $uri = "http://api.steampowered.com/ISteamNews/GetNewsForApp/v0002/?appid=" . $id . "&count=5&maxlength=300&format=json";

    $resultado = file_get_contents($uri, false);

    //$totalPaginas=0;
    //Pasar de json a objeto php y recorrer los resultados
    if ($resultado != false) {
      $respPHP = json_decode($resultado);

      //$totalPaginas = $respPHP->total_pages;

      foreach ($respPHP as $noticia) {
        //La fecha entra dentro del titulo
        $noticiasArray['newsitems'][] = $noticia;
        $idNoticia = $noticia->newsitems[0]->gid; 
       
        echo "
                  <h1>Noticia</h1>
                    <div class='card' style='width: 22rem;'>
                    <div class='card-body'>
                    <h3 class='card-title'>" . $noticia->newsitems[0]->title . "</h3>       
                    <h4 class='card-title'>" . $noticia->newsitems[0]->author . "</h4>       
                    <h5 class='card-title'>" . $noticia->newsitems[0]->contents . "</h5>          
                    <p class='card-text'>
                    <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalComentario'>
                    Comentario
                    </button>
                    </p>
                    
                    </div>
                    </div>
                  ";
        echo "<p class='card-text'><small class='text-primary'>Comentarios: " . $comentario . "</p>";
     
        //MODAL------------------------------------------------------------
        echo "
<div class='modal fade' id='modalComentario' tabindex='-1'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title'>¡Danos tu opinión!</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            <form action='enrutador.php' method='post' id='forComentario'>
                            <h5>Nick</h5>
                                <input type='text' name='nick'  required>
                                <input type='hidden' name='nick'  >
                                <h5>Comentario</h5>
                                <input type='hidden' name='accion' value='comentario'>
                                <textarea name='coment' rows='10' cols='50' required></textarea>
                                <input type='hidden' name='idJuego' value='" . $id . "'>
                                <input type='hidden' name='idNoticia' value='" . $idNoticia . "'>
                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                                <button type='submit' form='forComentario' class='btn btn-primary' >Guardar</button>
                            </form>
                        </div>
                        <div class='modal-footer'>
                          
                        </div>
                        </div>
                    </div>
                    </div> 
                ";
              }
              include "pie.php";
    }
  }

    public static function mostrarNoticiaComentario($id, $comentario,$idNoticia)
  {




    echo "<div class='container'>";

    echo "<div class='row'>";
    
    $uri = "http://api.steampowered.com/ISteamNews/GetNewsForApp/v0002/?appid=" . $id . "&count=5&maxlength=300&format=json";

    $resultado = file_get_contents($uri, false);

    //$totalPaginas=0;
    //Pasar de json a objeto php y recorrer los resultados
    if ($resultado != false) {
      $respPHP = json_decode($resultado);

      //$totalPaginas = $respPHP->total_pages;

      foreach ($respPHP as $noticia) {
        //La fecha entra dentro del titulo
        $noticiasArray['newsitems'][] = $noticia;
        $idNoticia = $noticia->newsitems[0]->gid; 
        echo $idNoticia;
        echo "<br>";
        echo $id;
        echo "
                  <h1>Noticia</h1>
                    <div class='card' style='width: 22rem;'>
                    <div class='card-body'>
                    <h3 class='card-title'>" . $noticia->newsitems[0]->title . "</h3>       
                    <h4 class='card-title'>" . $noticia->newsitems[0]->author . "</h4>       
                    <h5 class='card-title'>" . $noticia->newsitems[0]->contents . "</h5>          
                    <p class='card-text'>
                    <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalComentario'>
                    Comentario
                    </button>
                    </p>
                    
                    </div>
                    </div>
                  ";
        echo "<p class='card-text'><small class='text-primary'>Comentarios: " . $comentario . "</p>";
     
        //MODAL------------------------------------------------------------
        echo "
<div class='modal fade' id='modalComentario' tabindex='-1'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                        <div class='modal-header'>
                            <h5 class='modal-title'>¡Danos tu opinión!</h5>
                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                        </div>
                        <div class='modal-body'>
                            <form action='enrutador.php' method='post' id='forComentario'>
                            <h5>Nick</h5>
                            <input type='text' name='nick' value='' required>
                                <input type='hidden' name='nick' value=nick>
                                <h5>Comentario</h5>
                                <input type='hidden' name='accion' value='comentario'>
                                <textarea name='textarea' rows='10' cols='50' required></textarea>
                                <input type='hidden' name='idJuego' value='" . $id . "'>
                                <input type='hidden' name='idNoticia' value='" . $idNoticia . "'>
                                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Cerrar</button>
                                <button type='submit' form='forComentario' class='btn btn-primary' >Guardar</button>
                            </form>
                        </div>
                        <div class='modal-footer'>
                          
                        </div>
                        </div>
                    </div>
                    </div> 
                ";
              }
      
    }
    include "pie.php";
  }
}
