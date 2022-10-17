<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</head>

<body style="background-color:lightskyblue;">
    <div class="container">

        <h1>Libreria Jaroso 2022</h1>

        <?php
        function pintarPorCategoria($productos, $categoria)
        {
            echo "<h3>" . strtoupper($categoria) . "</h3>";
            $cont = 0;
            foreach ($productos as $valor) {

                if ($valor['categoria'] == $categoria) {

                    if ($cont == 4)
                        break;
                    $cont++;

                    echo "<div class='card mb-5' style='width: 16rem; margin: 30px;'>
                        <img src='" . $valor["imagen"] . "' class='card-img-top' alt='...' width=250px height=325px>
                            <div class='card-body'>
                            <h4 class='card-title'>" . $valor["nombre"] . "</h4>
                            <h6 class='card-title'>" . $valor["autor"] . "</h6>
                            <p class='card-text'>" . $valor['descripcion'] . "</p>
                            <p class='card-text'>" . $valor['ISBN'] . "</p>";

                   

                    echo "
                            <p class='card-text'><small class='text-secondary'>" . $valor["precio"] . " €</small></p>

                            <a href='#' class='btn btn-primary'>Comprar</a>
                        </div>
                    </div>";
                }
            }
        }


       
        $productos = array(
            array(
                "nombre" => "El futuro de nuestra mente.", "imagen" => "img/ciencia1.jpg", "precio" => 19, 85, "autor" => "MICHIO KAKU",
                "categoria" => "ciencia","ISBN" => "9788499923925", "descripcion" => "Uno de los divulgadores científicos más conocidos del mundo.",
    
            ),
            array(
                "nombre" => "Breve historia de mi vida.", "imagen" => "img/ciencia2.jpg", "precio" => 10, "autor" => "Stephen Hawking","ISBN" => "9788498926606",
                "categoria" => "ciencia", "descripcion" => "Clarividente, íntimo y sabio, Breve historia de mi vida nos abre una ventana al cosmos personal de Hawking.",
                
            ),
            array(
                "nombre" => "El bonobo y los diez mandamientos.", "imagen" => "img/ciencia3.jpg", "precio" => 18,05, "autor" => "Frans de Waal","ISBN" => "9788483838044", "categoria" => "ciencia", "descripcion" => "Si en el pasado se sostenía que los animales carecían de emoción y sentimientos, en la actualidad los estudiosos del comportamiento animal pueden afi rmar que la ayuda mutua, la empatía e incluso la angustia por la muerte de un congénere no son una excepción en la conducta de determinadas especies, sino la regla.",
              
            ),
            array(
                "nombre" => "Somos nuestro cerebro.", "imagen" => "img/ciencia4.jpg", "precio" => 20,80, "autor" => "Dick Swaab","ISBN" => "9788415880769",
                "categoria" => "ciencia", "descripcion" => "La historia de nuestra vida es la historia de nuestro cerebro. Dick Swaab estudia el ser humano, en especial su cerebro, desde su concepción hasta su muerte.",
             
            ),
            array(
                "nombre" => "El corazon de las tinieblas.", "imagen" => "img/ciencia5.jpg", "precio" => 27,55, "autor" => "Jeremiah Ostriker, Simon Mitton","ISBN" => "9788494100895",
                "categoria" => "ciencia", "descripcion" => "De entre todos los enigmas científicos que quedan por desvelar probablemente el más atractivo y el de mayor peso filosófico sea el de la materia y la energía oscuras.",
              
            ),
            array(
                "nombre" => "El factor humano.", "imagen" => "img/deporte1.jpg", "precio" => 10, "autor" => "John Carlin","ISBN" => "9788432229428",
                "categoria" => "deporte", "descripcion" => "La fascinante historia de cómo Nelson Mandela consiguió el milagro de la reconciliación entre blancos y negros en Sudáfrica.",
               
            ),
            array(
                "nombre" => "No las llames chicas,llámalas futbolistas.", "imagen" => "img/deporte2.jpg", "precio" => 17.05, "autor" => "Danae Boronat","ISBN" => "9788448028206",
                "categoria" => "deporte", "descripcion" => "Un libro para amantes del deporte rey que pone el foco en el fútbol femenino. A partir de testimonios de máxima actualidad se tocarán los temas más polémicos para visibilizar la realidad, generar debate y despertar conciencias.",
                
            ),
            array(
                "nombre" => "Mentalidad mamba.", "imagen" => "img/deporte3.jpg", "precio" => 23,70, "autor" => "Kobe Bryant","ISBN" => "9788417568665",
                "categoria" => "deporte", "descripcion" => "Descubre a uno de los atletas más inteligentes, analíticos y creativos de nuestros tiempos.

                Cuando oigo a la gente decir que se han sentido inspirados por la mentalidad mamba, pienso que todo mi trabajo, todo mi esfuerzo y todo el sudor, ha merecido la pena. Por eso he escrito este libro.",
               
            ),
            array(
                "nombre" => "Muhammad Ali y el nacimiento de un heroe americano.", "imagen" => "img/deporte5.jpg", "precio" => 10.40, "autor" => "David Remnick","ISBN" => "9788499086606",
                "categoria" => "deporte", "descripcion" => "Cuando aquella noche de 1964, Muhammad Ali, conocido por entonces como Cassius Clay, saltó al cuadrilátero para enfrentarse a Sonny Liston, fue contemplado por todo el mundo como un irritante adefesio que se movía y hablaba demasiado.",
               
            ),
            array(
                "nombre" => "Open.", "imagen" => "img/deporte4.jpg", "precio" => 8,50, "autor" => "Andre Agassi","ISBN" => "9788419004437",
                "categoria" => "deporte", "descripcion" => "Siendo un bebe, le pusieron una raqueta de juguete en la mano.",
               
            ),
            array(
                "nombre" => "Don quijote de la mancha.", "imagen" => "img/novela1.jpeg", "precio" => 20,61, "autor" => "Miguel de Cervantes","ISBN" => "9788431673963",
                "categoria" => "novela", "descripcion" => "Cervantes escribió el Quijote con la intención de parodiar los libros de caballerías, que consideraba simples sartas de disparates desprovistas de todo interés.",
               
            ),
            array(
                "nombre" => "El señor de los anillos.", "imagen" => "img/novela3.jpeg", "precio" => 18,95, "autor" => "J.R.R Tolkien","ISBN" => "9788445003022",
                "categoria" => "novela", "descripcion" => "La obra cumbre de la fantasía épica en un solo volumen

                Los Anillos de Poder fueron forjados en antiguos tiempos por los herreros Elfos, y Sauron, el Señor Oscuro, forjó el Anillo Único.",
               
            ),
            array(
                "nombre" => "El principito.", "imagen" => "img/novela4.jpeg", "precio" => 17,05, "autor" => "Antoine de Saint Exupery","ISBN" => "9788478886296",
                "categoria" => "novela", "descripcion" => "Fábula mítica y relato filosófico que interroga acerca de la relación del ser humano con su prójimo y con el mundo, El Principito concentra, con maravillosa simplicidad, la constante reflexión de Saint-Exupery sobre la amistad, el amor, la responsabilidad y el sentido de la vida.",
               
            ),
            array(
                "nombre" => "El Hobbit.", "imagen" => "img/novela5.jpeg", "precio" => 10,40, "autor" => "J.R.R Tolkien","ISBN" => "9788445000656",
                "categoria" => "novela", "descripcion" => "Un gran clásico moderno y el preludio de las vastas y poderosas mitologías de El Señor de los Anillos

                Smaug parecía profundamente dormido cuando Bilbo espió una vez más desde la entrada. ¡Pero fingía estar dormido! ¡Estaba vigilando la entrada del túnel!... Sacado de su cómodo agujero-hobbit por Gandalf y una banda de enanos, Bilbo se encuentra de pronto en medio de una conspiración que pretende apoderarse del tesoro de Smaug el Magnífico, un enorme y muy peligroso dragón...",
                
            ),
            array(
                "nombre" => "Historia de dos ciudades.", "imagen" => "img/novela2.jpeg", "precio" => 13,30, "autor" => "Charles Dickens","ISBN" => "9788484287285",
                "categoria" => "novela", "descripcion" => "El Londres pacífico pero grotesco del rey Jorge III y el París clamoroso y ensangrentado de la Revolución Francesa son las dos ciudades sobre cuyo fondo se escribe esta inolvidable historia de intriga apasionante. ",
               
            )
        );



        echo "<div class='container'>";
        echo "<div class='row'>";

        //Me quedo con los valores de la columna categoría, y los valores los meto en un array
        $categorias = array_column($productos, "categoria");
        //Quito repetidos
        $categorias = array_unique($categorias);

        foreach ($categorias as $categoria)
            pintarPorCategoria($productos, $categoria);

        echo "</div>";
        echo "</div>";


        ?>

    </div>

</body>

</html>