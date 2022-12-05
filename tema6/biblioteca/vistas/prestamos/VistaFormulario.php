<?php

class VistaFormulario {
    
    public static function nuevoPrestamo($libros,$usuarios){
        include("./vistas/cabecera.php");
        //var_dump($libros);
        echo '<body class="bg-gradient-primary">

    <div class="container">
  
      <!-- Outer Row -->
      <div class="row justify-content-center">
  
        <div class="col-xl-10 col-lg-12 col-md-9">
  
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
          
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Nuevo Prestamo</h1>
                </div>


                <form method="post" action="enrutador.php">

                        <div class="form-group">
                            <label >Titulo:</label>
                            <select name="idlibro" class="form-control">';
                            foreach ($libros as $libro){
                                echo '
                                <option value='.$libro->getId().'>'.$libro->getTitulo().'</option>';
                            }
                            echo '
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Nombre:</label>
                            <select name="idusuario" class="form-control ">';
                            foreach ($usuarios as $usuario){
                                echo '
                                <option value='.$usuario->getId().'>'.$usuario->getNombre().'</option>';
                            }
                            echo '</select>
                        </div>';

                        echo '<div class="form-group">
                            <label >Fecha Inicio:</label>
                            <input type="date" name="fecha_inicio" class="form-control"/>
                            
                        </div>';
                        echo '<div class="form-group ">
                            <label >Fecha Fin:</label>
                            <input type="date" name="fecha_fin" class="form-control" />
                            
                        </div>';

                        echo '<div class="form-group">
                            <label >Estado:</label>
                            <select name="estado" class="form-control ">
                                <option value="activo">activo</option>;
                            </select>
                        </div>';
                        echo'<input type="hidden" name="accion" value="nuevoPrestamo">
                        <center>
                        <button type="submit" class="btn btn-success mt-3">
                            Nuevo prestamo
                        </button>
                        </center>
                    </form>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
      include("./vistas/pie.php");
    }
}


