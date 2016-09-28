<?php
//http://php.net/manual/en/pdostatement.fetchall.php

require_once("conexion.php");

try{
    
    //Hacemos un filtro para que cuando nos den el ID saber que es un Int.
    $idtarea = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $hecho = $_POST['hecho'];
    
    //Preparamos la consulta SQL para que se pueda ejecutar.
    $sth = $dbh->prepare("UPDATE tareas SET nombre='$nombre', descripcion='$descripcion', hecho=$hecho wehere ID=$idtarea");
    //Ejecutamos la consulta
    $sth->execute();
    
    
    
    $mensajerror = [
        "msg" => "Tarea eliminda"
        ];
    header('Content-Type: application/json');
    echo json_encode($mensajerror);
    
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>