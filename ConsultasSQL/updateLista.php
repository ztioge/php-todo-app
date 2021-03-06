<?php
//http://php.net/manual/en/pdostatement.fetchall.php

require_once("conexion.php");

try{
    
    //Hacemos un filtro para que cuando nos den el ID saber que es un Int.
    $idlista = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
    $nombre = $_POST['nombre'];
    
    //Preparamos la consulta SQL para que se pueda ejecutar.
    //Solo funciona si le pasamos todos los parametros.
    $sth = $dbh->prepare("UPDATE listas SET nombre='$nombre' WHERE ID=$idlista");
    //Ejecutamos la consulta
    $sth->execute();
    
    
    
    $mensajerror = [
        "msg" => "Lista actualizada"
        ];
    header('Content-Type: application/json');
    echo json_encode($mensajerror);
    
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>