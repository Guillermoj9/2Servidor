<?php

    class VistaLibrosTodos {

        public static function render($libros) {

            include("./vistas/cabecera.php");

            echo ' <div class="album py-5 bg-light">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';

            //Para cada libro, lo pinto en un card
            foreach($libros as $libro) {

                echo ' <div class="col">
                <div class="card shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>'.$libro->getTitulo().'</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">'.$libro->getTitulo().'</text>
                  <image href="'.$libro->getImagenPortada().'" width="100%"/>
                  </svg>
      
                  <div class="card-body">
                    <p class="card-text">'.$libro->getTitulo().'</p>
                    <p class="card-text">'.$libro->getAutor().'</p>
                    <p class="card-text">'.$libro->getDescripcion().'</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      </div>
                    </div>
                  </div>
                </div>
              </div>';
            }

            echo "</div></div></div>";


            include("./vistas/pie.php");
        }
       //
    }
?>