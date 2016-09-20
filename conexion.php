<?php
//https://github.com/zmwebdev/php-examples/tree/master/03-database/mysql/PDO
//http://php.net/manual/es/pdo.connections.php

$user = "ztioge";
$pass = "";


try {
    $dbh = new PDO('mysql:host=localhost;dbname=databaseIker', $user, $pass);
    foreach($dbh->query('SELECT * from tareas') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>