<?php

class VistasRegalos
{

  public static function render($regalos)
  {

    include("./vista/cabecera.php");


    echo ' <div class="album py-5 bg-warning">

            <div class="container">';

?>
    <p><button type='button' class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#nuevoRegalo'>
        Nuevo regalo
      </button></p>
<?php

    echo ' 
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
    foreach ($regalos as $regalo) {
      echo '
                 <div class="col">
                <div class="card shadow-sm bg-light">      
                  <div class="card-body">

                  <form method="post" action="enrutador.php">
                    <p class="card-text"> Nombre: <input type="text" name="nombre" value="' . $regalo->getNombre() . '"></p>
                    <p class="card-text">Destinatario: <input type="text" name="destinatario" value="' . $regalo->getDestinatario() . '"></p>
                    <p class="card-text">Precio : <input type="number" name="precio" value="' . $regalo->getPrecio() . '"€</p>
                    <br>
                    
                    <p  class="card-text">Año<input type="date" name="year" value="' . $regalo->getYear() . '"</p>
                    
                    <br><br>
                    <select name="estado" id="estado-select">
                    <option>' . $regalo->getEstado() . '</option>
                        <option value="pendiente">Pendiente</option>
                        <option value="comprado">Comprado</option>
                        <option value="envuelto">Envuelto</option>
                        <option value="entregado">Entregado</option>
                    </select>

                    <input type="hidden" name="id" value=' . $regalo->getId() . '>
                    
                    <input type="hidden" name="accion" value="modificarRegalo">
                    <button class="btn btn-dark" type="submit">Modificar</button>
                    </form>
                    <br>
                   
                    <a class="btn btn-danger" href="enrutador.php?accion=borrarRegalo&id=' . $regalo->getId() . '" >BORRAR</a> 

                    <a class="btn btn-success" href="enrutador.php?accion=verEnlaces&id=' . $regalo->getId() . '" >Ver en tienda</a> 
                  
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
?>