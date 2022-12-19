<?php

class VistaJugadores
{

  public static function render($jugadores,$partidas)
  {

    include("./vista/cabecera.php");


    echo ' <div class="album py-5 bg-secondary">

            <div class="container">';



    echo ' 

              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';

              foreach ($jugadores as $jugador){
              
               echo ' <div class="album py-5 bg-secondary">
               <div class="col">
               <div class="card shadow-sm bg-light">      
                 <div class="card-body">
                  
                    <p > Nombre : ' . $jugador->getNombre() . '</p>
                    <p > APODO : ' . $jugador->getApodo() . '</p>
                    <p > Nivel : ' . $jugador->getNivel() . '</p>
                    <p > Edad : ' . $jugador->getEdad() . '</p>
                    <input type="hidden" name="id_jugador" value='. $jugador->getId().'>
                    ';
              }
              echo  '<div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
              </div>
            </div>
          </div>
        </div>
      </div>';
               
        
             foreach ($partidas as $partida) {
                echo ' <div class="album py-5 bg-secondary">

            ';
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
                    <br><br>
                    <select name="estado" id="estado-select">
                    <option>' . $partida->getEstado() . '</option>
                        <option value="libre">Libre</option>
                        <option value="ocupado">Ocupado</option>
                      
                    </select>

                    <input type="hidden" name="id" value='. $partida->getId().'>
                    
                    <input type="hidden" name="accion" value="modificarRegalo">
                    <button class="btn btn-dark" type="submit">Modificar</button>
                    </form>
                    <br>
                    <a>-----------------------------------------------------------</a>
                    

                    <a class="btn btn-success" href="enrutador.php?accion=verEnlaces&id='. '$regalo->getId()'.'" >JUGAR</a> 


                    <a class="btn btn-danger" href="enrutador.php?accion=borrarPartida&id=' . $partida->getId() . '" >NO JUGAR </a> 


                  
                      
                   
                  

                   
                    
                    
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