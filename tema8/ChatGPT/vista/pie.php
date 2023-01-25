</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>

  </div>
</footer>

<div class="modal fade" id="nuevoArticulo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo articulo</h5>
      </div>
      <div class="modal-body">
        <form id='formInsertarArticulo'>
          <div class='mb-3'>
            <label for='nombre' class='form-label' >Articulo</label>
            <input type='textarea' name='nombre' class='form-control' aria-describedby='emailHelp' required>
          </div>
          <input type="hidden" name = "accion" value="insertarArticulo">
          <input type="hidden" name ="id_usuario" value = '<?php echo unserialize($_SESSION["usuario"])->getId(); ?> '  >
         
        </form>
       
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
        <button type='submit' class='btn btn-primary' form="formInsertarArticulo" formaction="enrutador.php" formmethod="get">Crear</button>
      </div>
    </div>
  </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>