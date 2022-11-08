<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <title>Todoist</title>
</head>
<body>

    <div class='container'></div>
        <div class="row align-items-center">
            <div class='col-3'></div>
            <div class='col-3'>

              <h1>TODOIST</h1>
              <br>

<?php
    
    function pintarFormulario() {

        echo "<div class='container'>
        <div class='row' style='width: 280px;'>
          <form action='controlador.php' method='post' > 
              <div class='mb-3'>
                  <label for='exampleInputEmail1' class='form-label'>Login</label>
                  <input type='text' name='login' class='form-control' aria-describedby='emailHelp'>
              </div>
              <div class='mb-3'>
                  <label for='exampleInputPassword1' class='form-label'>Password</label>
                  <input type='password' name='password' class='form-control'>
              </div>
              <button type='submit' name='login' class='btn btn-primary'>Enviar</button>
          </form>
        </div>
      </div>";

    }




if (isset($_POST['login'])) {  //Saber si ha mandado algo por GET
    //Comprobar que la contraseña es correcta
    if ($_POST['password'] == "12345678") {
        echo "Contraseña correcta";
        if (isset($_POST['email'])) {
            echo "<br>Bienvenido ".$_POST['email'];
        }
    } else {
        //No se puede hacer ningún echo antes de él
        echo "<p class='text-danger'>Password incorrecto</p>";
        pintarFormulario();
    }
} else {
        pintarFormulario();
}


?>

            </div>
        </div>
    </div>

</body>
</html>