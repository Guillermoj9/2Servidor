<?php

class VistaTodosPrestamos
{

  public static function render($prestamos)
  {

    include("./vistas/cabecera.php");


    echo ' <div class="album py-5 bg-success">
            <div class="container">
            <p> <a type="button" class="btn btn-light "  href="enrutador.php?accion=verFormulario" > Nuevo prestamo </a></p>';
?>


    <form method="post" action="enrutador.php">
      <label for="estado">Estado</label>
      <select name="estado" id="estado-select">
        <?php foreach ($prestamos as $prestamo) {
          echo ' <option name="estado" value="' . $prestamo->getEstado() . '">' . $prestamo->getEstado() . '</option>';
        }
        ?>
      </select>
      <?php echo ' <a type="button" class="btn btn-light " href="enrutador.php?accion=buscarEstado&estado=' . $prestamo->getEstado() . '"> Buscar </a> ';     ?>
    </form>



    <br>
    <form method="post" action="enrutador.php">

      <label for="tlf">Telefono</label>
      <input type="text" name="tlf" value="">
      <a type="button" class="btn btn-light " href="enrutador.php?accion=buscarTelefono"> Buscar </a>
    </form>





<?php
    echo ' 
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
    foreach ($prestamos as $prestamo) {
      echo '
                 <div class="col">
                <div class="card shadow-sm bg-light">      
                  <div class="card-body">
                    <p class="card-text"><a>Id Libro:</a> ' . $prestamo->getIdlibro() . '</p>
                    <p class="card-text"><a>Nombre usuario:</a>' . $prestamo->getIdusuario() . '</p>
                    <br>
                    <a>Fecha inicio</a>
                    <p class="card-text">' . $prestamo->getFecha_inicio() . '</p>
                    <br>

                    <form method="post" action="enrutador.php">
                    <select name="estado" id="estado-select">
                    <option>' . $prestamo->getEstado() . '</option>
                        <option value="activo">activo</option>
                        <option value="devuelto">devuelto</option>
                        <option value="retraso">retraso</option>
                    </select>
                    <input type="hidden" name="id" value=' . $prestamo->getId() . '>
                    <a>Fecha fin</a>
                    <input type="date" name="fecha_fin" value=' . $prestamo->getFecha_fin() . '>
                    <br>
                    <a>-----------------------------------------------------------</a>
                    <input type="hidden" name="accion" value="modificar">
                      <button class="btn btn-success" type="submit">Modificar</button>
                    </form>
                    <br>
                     <a  class="btn btn-danger" href="enrutador.php?accion=borrarPrestamo&id=' . $prestamo->getId() . 'data-bs-target="#borrarPrestamo">Borrar</a> 
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