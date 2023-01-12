<?php

class VistaPartidas
{

  public static function render($partidas)
  {

    include("./vista/cabecera.php");

?>
    <br>
    <div class="container">
    <p><button type='button' class='btn btn-secondary' data-bs-toggle='modal' data-bs-target='#nuevaPartida'>
        Nueva Partida
      </button></p>
<?php
 
    echo ' <table class="table table-striped table-dark">
   <thead>
     <tr>
       <th scope="col">Fecha</th>
       <th scope="col">Hora</th>
       <th scope="col">Ciudad</th>
       <th scope="col">Lugar</th>
       <th scope="col">Cubierto</th>
       <th scope="col">Estado</th>
       <th scope="col">Acciones</th>
     </tr>
   </thead>';
   
    foreach ($partidas as $partida) {
     
      echo '<tbody>
     <tr>
       <th>' . $partida->getFecha() . '</th>
       <td>' . $partida->getHora() . '</td>
       <td>' . $partida->getCiudad() . '</td>
       <td>' . $partida->getLugar() . '</td>
       <td>' . $partida->getCubierto() . '</td>
       <td>' . $partida->getEstado() . '</td>
       <td> <a class="btn btn-danger" href="enrutador.php?accion=borrarPartida&id=' . $partida->getId() . '" >BORRAR</a> 

                    <a class="btn btn-success" href="enrutador.php?accion=verPartida&id=' . $partida->getId() . '&id_jugador=' . $partida->getId_jugadores() . '" >Detalles</a> 
                    </td>
     </tr>
   </tbody>
   </div>';

  }
      echo  '</table>';
    

    include("./vista/pie.php");
  }
}
?>