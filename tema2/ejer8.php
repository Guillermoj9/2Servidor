<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DBD</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body style="background-color:black">
    <div class="container">


        <center> <img src="imgs/logo.png" alt=""></center>
        <?php

        function pintar($personaje, $categoria)
        {
            
            $cont = 0;
            foreach ($personaje as $valor) {

                if ($valor['categoria'] == $categoria) {

                   echo " <center><div class='card mb-3' style='max-width: 900px;'>
                    <div class='row g-0'>
                      <div class='col-md-4'>
                        <img src='". $valor['imagen'] . "' class='card-img-top' alt='...'  width=300px height=325px>
                      </div>
                      <div class='col-md-8'>
                        <div class='card-body'>
                        <h4 class='card-title'>" . $valor["nombre"] . "</h4>

                        <p class='card-text'>" . $valor['descripcion'] . "</p>
                        <p class='card-text'>" . $valor['alias'] . "</p>
                          <p class='card-text'><small class='text-muted'>Last updated 3 mins ago</small></p>";
                       
                          "</div>
                      </div>
                    </div>
                    
                  </div>
                  </center>";



                    //Pintar las tres imágenes
                    echo "<table class='table table-bordered blue-500'>";
                    echo "<tr>";
                  
                        echo "<td>";
                        echo "<img width='60' src='imgs/habilidad1.png' alt='". "'>";
                        echo "</td>";
                        echo "<td>";
                        echo "<img width='60' src='imgs/habilidad2.png' alt='". "'>";
                        echo "</td>";
                        echo "<td>";
                        echo "<img width='60' src='imgs/habilidad3.png' alt='". "'>";
                        echo "</td>";
                    
                    echo "</tr>";
                    echo "</table>";

                    echo "
                               <p class='card-text' ><small class='text-secondary'>" . $valor["precio"] . " puntos</small></p>
   
                               <a href='#' class='btn btn-primary'>Jugar</a>
                           </div>
                       </div>";
                }
            }
        }


        $personaje = array(
                array(
                    "nombre" => "Lisa Sherwood", "alias" => "La Bruja", "imagen" => "imgs/bruja.png", "precio" => 1550,
                    "categoria" => "Asesina", "descripcion" => "Asesina rápida asusta a tus enemigos con tus teletransportaciones",
                    "imagenes" => array("uno", "dos", "tres")
                ),
            
                array(
                    "nombre" => "Sally Smithson", "alias" => "La Enfermera", "imagen" => "imgs/enfermera.png", "precio" => 0,
                    "categoria" => "Asesina", "descripcion" => "Una nueva alimaña ha ingresado a la arena. La vi cuando ella, de alguna manera, se movió a través de una pared. Vestidos con vendajes que cuentan una historia nunca contada de algo horrible. Esta ... enfermera, como parece, me trae una nueva angustia durante mis solitarias noches, mientras mi mente se vuelve loca.",
                    "imagenes" => array("uno", "dos", "tres")
                ),
                array(
                    "nombre" => "Max Thompson Jr",  "alias" => "El Pueblerino", "imagen" => "imgs/aldeano.png", "precio" => 1000,
                    "categoria" => "Asesino", "descripcion" => "El Pueblerino es un asesino de alta movilidad, capaz de cubrir grandes distancias en poco tiempo y tumbar instantáneamente a los Supervivientes usando su Motosierra. ",
                    "imagenes" => array("uno", "dos", "tres")
                ),
                array(
                    "nombre" => "Danny Jed Olsen Johnson ", "alias" => "The Ghost Face", "imagen" => "imgs/ghostface.png", "precio" => 2500,
                    "categoria" => "Asesino sombrío", "descripcion" => "Un asesino espeluznante capaz de acechar a sus víctimas y acercarse sigilosamente usando su poder, Velo de la noche. Los supervivientes afectados se encontrarán desprotegidos al no percatarse de su presencia, por lo que deberán usar su percepción del entorno para poder sobrevivir.",
                    "imagenes" => array("uno", "dos", "tres")
                ),
          
                array(
                    "nombre" => "Herman Carter", "alias" => "El Doctor", "imagen" => "imgs/electro.png", "precio" => 1200,
                    "categoria" => "pantalones running", "descripcion" => "El Doctor es un asesino capaz de provocar la Locura. Con su poder, Chispa de Carter, crea un campo estático que incapacita a los supervivientes, les causa alucinaciones y hace que griten aterrorizados, revelando así su ubicación.",
                    "imagenes" => array("uno", "dos", "tres")
                ),
                array(
                    "nombre" => "Anna", "alias" => "La Cazadora", "imagen" => "imgs/hachas.png", "precio" => 1550,
                    "categoria" => "Asesina", "descripcion" => "La Cazadora es un asesino a distancia, capaz de lanzar Destrales de Caza a los Supervivientes para dañarlos a distancia. ",
                    "imagenes" => array("uno", "dos", "tres")
                ),
           
                array(
                    "nombre" => "Michael Myers", "alias" => "La Forma", "imagen" => "imgs/michaelm.png", "precio" => 1550,
                    "categoria" => "pantalones running", "descripcion" => "La Forma es un Asesino inquietante que se dedica a acechar a los supervivientes a cierta distancia para alimentar su poder, Mal interior, Cuanto más tiempo está al acecho, más fuerte y rápido se vuelve. ",
                    "imagenes" => array("uno", "dos", "tres")
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