<?php

class VistaBlog
{

  public static function mostrarBlog($articulos)
  {
    include("./vista/cabecera.php");
   
    echo ' 
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
foreach ($articulos as $articulo) {
echo '
       <div class="col">
      <div class="card shadow-sm bg-light">      
        <div class="card-body">
          <p class="card-text"> Titulo:' . $articulo->getTitulo() . '</p>
          <p class="card-text">Texto:' . $articulo->getTexto() . '</p>
          <img src="'. urldecode($articulo->getImagen()).'" class="card-img-top">
          <br>
          
          <p  class="card-text">Fecha '. $articulo->getFecha() . '</p>
          
          <br><br>    
        
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
            </div>
          </div>
        </div>
      </div>
    </div>';
}

echo "</div></div>";
    include("./vista/pie.php");
  }
}
