<?php

class VistasEnlaces
{

    public static function render($enlaces)
    {

        include("./vista/cabecera.php");


        echo ' <div class="album py-5 bg-warning">
            <div class="container">
            ';
?>
 <p><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#nuevoEnlace'>
      Nuevo enlace
    </button></p>

<?php
        echo ' 
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
        foreach ($enlaces as $enlace) {
            echo '
                 <div class="col">
                <div class="card shadow-sm bg-light">      
                  <div class="card-body">
                    <p class="card-text"><a>Nombre:</a> ' . $enlace->getNombre() . '</p>
                    <p class="card-text"><a>Enlace: </a>' . $enlace->getEnlace() . '</p>
                    <p class="card-text"><a>Precio : </a>' . $enlace->getPrecio() . '€</p>
                    <p class="card-text"><a>Imagen: </a>' . $enlace->getImagen() . '</p>
                    <br>

                    <form method="post" action="enrutador.php">
                    <select name="prioridad" id="estado-select">
                    <option>' . $enlace->getPrioridad() . '</option>
                        <option value="baja">Baja</option>
                        <option value="media">Media</option>
                        <option value="alta">Alta</option>
                       
                    </select>
                    <br>
                    <a>-----------------------------------------------------------</a>
                    
                      <a class="btn btn-danger" href="enrutador.php?accion=borrarEnlace&id_Enlace=' . $enlace->getId() . '&id='.$enlace->getId_regalo().'" >BORRAR</a> 
                    </form>
                    <br>
                   
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                      </div>
                    </div>
                  </div>
                </div>
              </div>';
        }

        echo "</div></div></div>";

        include("./vista/pie.php");
    }
}
?>