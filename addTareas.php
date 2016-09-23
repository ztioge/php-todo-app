<?php
//http://php.net/manual/en/pdostatement.fetchall.php
//Hay que empezar

require_once("conexion.php");

try{
    
    //Hacemos un filtro para que cuando nos den el ID saber que es un Int.
    $idlista = filter_input(INPUT_POST, 'ID_listas', FILTER_VALIDATE_INT);
    
    //Preparamos la consulta SQL para que se pueda ejecutar.
    $sth = $dbh->prepare("Insert into listas(ID, nombre, descripcion, hecho, ID_listas)");
    
    //Ejecutamos la consulta
    $sth->execute();
    
    
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    
    header('Content-Type: application/json');
    echo json_encode($result);
    
    $dbh=null;
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>