</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>

  </div>
</footer>

<div class="modal fade" id="nuevoRegalo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo regalo</h5>
      </div>
      <div class="modal-body">
        <form id='formInsertarRegalo'>
          <div class='mb-3'>
            <label for='nombre' class='form-label' >Nombre</label>
            <input type='text' name='nombre' class='form-control' aria-describedby='emailHelp' required>
          </div>
          <div class='mb-3'>
            <label for='destinatario' class='form-label'>Destinatario</label>
            <textarea class='form-control' name="destinatario" id="" cols="30" rows="5" required></textarea>
          </div>
          <div class='mb-3'>
            <label for='precio' class='form-label'>Precio</label>
            <input type='number' name='precio' class='form-control' required>
          </div>
          <div class='mb-3'>
            <select name="estado" id="estado-select">
              <option value="pendiente">Pendiente</option>
              <option value="comprado">Comprado</option>
              <option value="envuelto">Envuelto</option>
              <option value="entregado">Entregado</option>
            </select>
          </div>
          <div class='mb-3'>
            <label for='fechaFin' class='form-label'>Año</label>
            <input type='date' name='year' id='fechaFin' class='form-control' aria-describedby='emailHelp' required>
          </div>
          <input type="hidden" name = "accion" value="insertarRegalo">
          <input type="hidden" name ="id_usuario" value = '<?php echo unserialize($_SESSION["usuario"])->getId(); ?> '  >
         
        </form>
       
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
        <button type='submit' class='btn btn-primary' form="formInsertarRegalo" formaction="enrutador.php" formmethod="get">Crear</button>
      </div>
    </div>
  </div>
</div>

<!--ENLACES MODAL--->
<div class="modal fade" id="nuevoEnlace" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo regalo</h5>
      </div>
      <div class="modal-body">
        <form id='formInsertarEnlace'>
          <div class='mb-3'>
            <label for='nombre' class='form-label'>Nombre</label>
            <input type='text' name='nombre' class='form-control' aria-describedby='emailHelp'>
          </div>
          <div class='mb-3'>
            <label for='enlace' class='form-label'>Enlace</label>
            <textarea class='form-control' name="enlace" id="" cols="30" rows="5"></textarea>
          </div>
          <div class='mb-3'>
            <label for='precio' class='form-label'>Precio</label>
            <input type='number' name='precio' class='form-control'>
          </div>
          <div class='mb-3'>
            <label for='imagen' class='form-label'>Imagen</label>
            <textarea class='form-control' name="imagen" id="" cols="30" rows="5"></textarea>
          </div>
          <div class='mb-3'>
            <select name="prioridad" id="prioridad-select">
              <option value="baja">baja</option>
              <option value="media">media</option>
              <option value="alta">alta</option>
             
            </select>
          </div>
          <input type="hidden" name = "accion" value="insertarEnlace">
          <input type="hidden" name ="id" value = '<?php echo $_GET['id']; ?> '  >
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type='submit'  class='btn btn-primary' form="formInsertarEnlace" formaction="enrutador.php" formmethod="get">Crear</button>
      </div>
    </div>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>