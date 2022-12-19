<?php

class VistaTodasPartidas
{

  public static function render($partidas)
  {

    include("./vista/cabecera.php");


    echo ' <div class="album py-5 bg-secondary">

            <div class="container">';

?>
    <p><button type='button' class='btn btn-dark' data-bs-toggle='modal' data-bs-target='#nuevaPartida'>
      Nueva Partida
    </button></p>
<?php

    echo ' 
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
    foreach ($partidas as $partida) {
      echo '
                 <div class="col">
                <div class="card shadow-sm bg-light">      
                  <div class="card-body">

                  
                    <p class="card-text"> Fecha : ' . $partida->getFecha() . '</p>
                    <p class="card-text"> Hora : ' . $partida->getHora() . '</p>
                    <p class="card-text"> Ciudad : ' . $partida->getCiudad() . '</p>
                    <p class="card-text"> Lugar : ' . $partida->getLugar() . '</p>
                    <p class="card-text"> Cubierto: ' . $partida->getCubierto() . '</p>
                    
                    <br>
                
                    
                    <form method="post" action="enrutador.php">
                    
                    <select name="estado" id="estado-select">
                    <option>' . $partida->getEstado() . '</option>
                        <option value="libre">Libre</option>
                        <option value="ocupado">Ocupado</option>
                      
                    </select>

                    <input type="hidden" name="id" value='. $partida->getId().'>
                    
                    <input type="hidden" name="accion" value="modificar">
                    <button class="btn btn-dark" type="submit">Modificar</button>
                    </form>
                    <br>
                    <a>___________________________________________________</a>
                    
                    <a class="btn btn-danger" href="enrutador.php?accion=borrarPartida&id=' . $partida->getId() . '" >BORRAR</a> 


                    <a class="btn btn-success" href="enrutador.php?accion=verPartida&id='. $partida->getId().'&id_jugador='.$partida->getId_jugadores().'" >Detalles</a> 
                  
                    
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