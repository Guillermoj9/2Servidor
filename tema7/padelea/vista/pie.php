</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>

  </div>
</footer>

<div class="modal fade" id="nuevaPartida" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Partida</h5>
      </div>
      <div class="modal-body">
        <form id='formInsertarPartida'>
          <div class='mb-3'>
          <label for='fecha' class='form-label'>Fecha</label>
            <input type='date' name='fecha' id='fecha' aria-describedby='emailHelp'>
          </div>

          <div class='mb-3'>
          <label for='hora' class='form-label'>Hora</label>
            <input type='time' name='hora' id='hora' aria-describedby='emailHelp'>
          </div>

          <div class='mb-3'>
            <label for='ciudad' class='form-label'>ciudad</label>
            <input type='text' name='ciudad' class='form-control' aria-describedby='emailHelp'>
          </div>
          
          <div class='mb-3'>
            <label for='lugar' class='form-label'>Lugar</label>
            <input type='text' name='lugar' class='form-control' aria-describedby='emailHelp'>
          </div>

          <div class='mb-3'>
            <label for='cubierto' class='form-label'>Cubierto</label>
            <input type='number' name='cubierto'min="0" max="1" class='form-control' aria-describedby='emailHelp'>
          </div>
          <div class='mb-3'>
            <select name="estado" id="estado-select">
              <option value="pendiente">Abierta</option>
            </select>
          </div>
         
          <input type="hidden" name = "accion" value="insertarPartida">
          <!--<input type="hidden" name ="id_usuario" value = <?php //echo unserialize($_SESSION["usuario"])->getId(); ?>   >
-->
        </form>
       
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
        <button type='submit' class='btn btn-primary' form="formInsertarPartida" formaction="enrutador.php" formmethod="get">Crear</button>
      </div>
    </div>
  </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>