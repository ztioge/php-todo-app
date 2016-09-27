<?php
//http://php.net/manual/en/pdostatement.fetchall.php
//Hay que empezar

require_once("conexion.php");

try{
    
    //Hacemos un filtro para que cuando nos den el ID saber que es un Int.
    $idlista = filter_input(INPUT_POST, 'ID_listas', FILTER_VALIDATE_INT);
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    
    //Preparamos la consulta SQL para que se pueda ejecutar.
    $sth = $dbh->prepare("INSERT INTO tareas (nombre, descripcion, ID_listas) VALUES ('$nombre', '$descripcion', $idlista)");
    
    //Ejecutamos la consulta
    $sth->execute();
    
    $mensajerror = [
        "msg" => "Lista Insertada"
        ];
    header('Content-Type: application/json');
    echo json_encode($mensajerror);
    
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>