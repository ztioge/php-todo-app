<?php

//Empezamos la sesion
session_start();
//Si el contador no existe crea uno con el valor 0, sino suma uno al contador que habia
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}

//Escribe en pantalla el contador
//echo $_SESSION['count'] . "<br />\n";

?>