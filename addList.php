<?php
//http://php.net/manual/en/pdostatement.fetchall.php

require_once("conexion.php");

try{
    
    //Hacemos un filtro para que cuando nos den el ID saber que es un Int.
    //$idlista = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
    $nombre = $_POST['nombre'];
    
    //Preparamos la consulta SQL para que se pueda ejecutar.
    $sth = $dbh->prepare("INSERT INTO listas (nombre) VALUES ('$nombre')");
    
    //Ejecutamos la consulta
    $sth->execute();
    
    
    
    $mensajerror = [
        "msg" => "Lista Insertada"
        ];
    header('Content-Type: application/json');
    echo json_encode($mensajerror);
    
}catch(PDException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>