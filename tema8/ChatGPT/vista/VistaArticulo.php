<?php

class VistaArticulo
{

  public static function mostrarArticulo()
  {

    include("./vista/cabecera.php");
    echo "<center><h1> Bienvenido al generador de articulos inteligente  </h1></center>";
    echo '<div class="container"> 
     <form> <div class="form-group">
    <label for="exampleFormControlTextarea1">Escribe el articulo</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="articulo" rows="3" cols="30"></textarea>
  </div>
  </div>
  <br>
  <input type="hidden" name="accion" value="nuevoArticulo">
  <center> <button class="btn btn-dark" type="submit">Crear articulo</button> </center>
</form>';
echo '<br>';
    include("./vista/pie.php");
  }
}
