<?php

echo "Primer ejemplo";

//Crear una tabla 5x3 desde php y rellenarla

echo "<table>";

$contador = 1;
for($i=0; $i<5; $i++){
    echo "<tr>";

    for($j=0; $j<3; $j++){
        echo "<td> . $contador . </td>";
        $contador++;
}
echo "</tr>";

}

echo "</table>";

//Muestra la tabla de multiplicar de una variable $numero

$numero =6;

for($i=1; $i<10; $i*$numero){
    echo "$numero * $i = " . ($numero *$i) . "<br>";
}

//Dada la cadena "en un lugar de la mancha de cuyo nombre"
//mostrar cadena al reves

$cadena = "En un lugar de la mancha de cuyo nombre";

echo for(strlen($cadena)-1; $i>=0; $i--)




?>



