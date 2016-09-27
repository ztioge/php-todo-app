<?php
//http://php.net/manual/en/pdostatement.fetchall.php

require_once("conexion.php");

try{
    
    //Hacemos un filtro para que cuando nos den el ID saber que es un Int.
    $idtarea = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
    
    //Preparamos la consulta SQL para que se pueda ejecutar.
    $sth = $dbh->prepare("DELETE FROM tareas where ID=$idtarea");
    
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