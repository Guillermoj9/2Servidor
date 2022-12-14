<?php

class VistasRegalos
{

    public static function render($regalos)
    {

        include("./vistas/cabecera.php");


        echo ' <div class="album py-5 bg-success">
            <div class="container">
            <p> <a type="button" class="btn btn-light "  href="enrutador.php?accion=nuevoRegalo" > Nuevo Regalo </a></p>';
?>


<?php
        echo ' 
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
        foreach ($regalos as $regalo) {
            echo '
                 <div class="col">
                <div class="card shadow-sm bg-light">      
                  <div class="card-body">
                    <p class="card-text"><a>Nombre:</a> ' . $regalo->getNombre() . '</p>
                    <p class="card-text"><a>Destinatario</a>' . $regalo->getDestinatario() . '</p>
                    <p class="card-text"><a>Precio</a>' . $regalo->getPrecio() . '</p>
                    <br>
                    <a>Año</a>
                    <p class="card-text">' . $regalo->getYear() . '</p>
                    <br>

                    <form method="post" action="enrutador.php">
                    <select name="estado" id="estado-select">
                    <option>' . $regalo->getEstado() . '</option>
                        <option value="pendiente">Pendiente</option>
                        <option value="comprado">Comprado</option>
                        <option value="envuelto">Envuelto</option>
                        <option value="entregado">Entregado</option>
                    </select>
                    <br>
                    <a>-----------------------------------------------------------</a>
                    <input type="hidden" name="accion" value="modificar">
                      <button class="btn btn-success" type="submit">Modificar</button>
                    </form>
                    <br>
                     <a  class="btn btn-danger" href="enrutador.php?accion=borrarRegalo&id=' . $regalo->getId() . 'data-bs-target="#borrarRegalo">Borrar</a> 
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
}
?>