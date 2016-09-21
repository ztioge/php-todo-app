<?php
//http://php.net/manual/en/pdostatement.fetchall.php

require_once("conexion.php");

try{
    $sth = $dbh->prepare("Select * from listas;");
    $sth->execute();
    
    $result = $sth->fetchAll();
    
    header('Content-Type: application/json');
    echo json_encode($result);
    
    $dbh=null;
}catch(PDOException $e ){
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>