<?php
//http://php.net/manual/en/pdostatement.fetchall.php

require_once("conexion.php");

try{
    
    //Hacemos un filtro para que cuando nos den el ID saber que es un Int.
    $idlista = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
    
    //Preparamos la consulta SQL para que se pueda ejecutar.
    $sth = $dbh->prepare("DELETE FROM listas where ID=$idlista");
    
    //Ejecutamos la consulta
    $sth->execute();
    
    
    
    $mensajerror = [
        "msg" => "Lista Eliminada correctamente"
        ];
    header('Content-Type: application/json');
    echo json_encode($mensajerror);
    
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>