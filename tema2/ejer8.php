<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBD</title>
    
</head>

<body style="background-color:lightgray;">
    <div class="container">

        
       <center> <img src="imgs/logo.png" alt="" ></center>
        <?php

        function pintar($personaje, $categoria)
        {
            echo "<h3>" . strtoupper($categoria) . "</h3>";
            $cont = 0;
            foreach ($personaje as $valor) {

                if ($valor['categoria'] == $categoria) {


                    echo "<div class='card mb-5' style='width: 16rem; margin: 30px;'>
                        <img src='" . $valor["imagen"] . "' class='card-img-top' alt='...' width=250px height=325px>
                            <div class='card-body'>
                            <h4 class='card-title'>" . $valor["nombre"] . "</h4>

                            <p class='card-text'>" . $valor['descripcion'] . "</p>
                            <p class='card-text'>" . $valor['categoria'] . "</p>";

                   

                   //Pintar las tres imágenes
                   echo "<table class='table table-bordered blue-500'>";
                   echo "<tr>";
                   foreach($valor['imagenes'] as $imagenMini) {
                       echo "<td>";
                       echo "<img width='40' src='' alt='".$imagenMini."'>";
                       echo "</td>";
                   }
                   echo "</tr>";
                   echo "</table>";

                   echo "
                               <p class='card-text'><small class='text-secondary'>".$valor["precio"]." puntos</small></p>
   
                               <a href='#' class='btn btn-primary'>Comprar</a>
                           </div>
                       </div>";    
               } 
           }

       }


        $personaje = array(
            array(
                array("nombre" => "Bruja", "imagen" => "imgs/bruja.png", "precio" => 1550,
                "categoria" => "Asesina", "descripcion" => "Asesina rápida asusta a tus enemigos con tus teletransportaciones",
                "imagenes" => array("uno","dos","tres")),
            ),
            array(
                array("nombre" => "Enfermera", "imagen" => "imgs/enfermera.png", "precio" => 0,
                "categoria" => "Asesina", "descripcion" => "Asesina rápida asusta a tus enemigos con tus teletransportaciones",
                "imagenes" => array("uno","dos","tres")),
            ),
            array(
                array("nombre" => "Aldeano", "imagen" => "imgs/aldeano", "precio" => 1000,
                "categoria" => "Asesino", "descripcion" => "Asesina rápida asusta a tus enemigos con tus teletransportaciones",
                "imagenes" => array("uno","dos","tres")),
            ),
            array(
                array("nombre" => "Enfermera", "imagen" => "imgs/enfermera", "precio" => 1550,
                "categoria" => "pantalones running", "descripcion" => "Asesina rápida asusta a tus enemigos con tus teletransportaciones",
                "imagenes" => array("uno","dos","tres")),
            ),
            array(
                array("nombre" => "Enfermera", "imagen" => "imgs/enfermera", "precio" => 1550,
                "categoria" => "pantalones running", "descripcion" => "Asesina rápida asusta a tus enemigos con tus teletransportaciones",
                "imagenes" => array("uno","dos","tres")),
            ),
            array(
                array("nombre" => "Enfermera", "imagen" => "imgs/enfermera", "precio" => 1550,
                "categoria" => "pantalones running", "descripcion" => "Asesina rápida asusta a tus enemigos con tus teletransportaciones",
                "imagenes" => array("uno","dos","tres")),
            ),
            array(
                array("nombre" => "Enfermera", "imagen" => "imgs/enfermera", "precio" => 1550,
                "categoria" => "pantalones running", "descripcion" => "Asesina rápida asusta a tus enemigos con tus teletransportaciones",
                "imagenes" => array("uno","dos","tres")),
            ),
            array(
                array("nombre" => "Enfermera", "imagen" => "imgs/enfermera", "precio" => 1550,
                "categoria" => "pantalones running", "descripcion" => "Asesina rápida asusta a tus enemigos con tus teletransportaciones",
                "imagenes" => array("uno","dos","tres")),
            )
            );










            echo "<div class='container'>";
            echo "<div class='row'>";
    
            //Me quedo con los valores de la columna categoría, y los valores los meto en un array
            $categorias = array_column($personaje, "categoria");
            //Quito repetidos
            $categorias = array_unique($categorias);
    
            foreach ($categorias as $categoria)
                pintar($personaje, $categoria);
    
            echo "</div>";
            echo "</div>";
    
    
            ?>
    
        </div>
    



</body>
</html>