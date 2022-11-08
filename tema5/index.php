<?php


try {
    $dsn = "mysql:host=mariadb;dbname=ejemplo";
    $dbh = new PDO($dsn, "usuario", "usuario");
} catch (PDOException $e){
    echo $e->getMessage();
}


//INSERT
//Prepare
$stmt = $dbh->prepare("INSERT INTO clientes (nombre,apellidos,direccion,localidad,movil) VALUES (?, ? ,? ,? , ?)");
// Bind
$stmt->bindValue(1, "Guille");
$stmt->bindValue(2, "jaba");
$stmt->bindValue(3, "cuevas");
$stmt->bindValue(4, "almanzora");
$stmt->bindValue(5, "80909090");
// Excecute
$stmt->execute();

//SELECT


// fetchAll() con PDO::FETCH_OBJ
$stmt = $dbh->prepare("SELECT * FROM clientes");
$stmt->execute();
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($clientes as $cliente){
        echo $cliente['nombre'] . "<br>";
}
?>