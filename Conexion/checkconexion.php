<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "apptodo";
    $dbport = 3306;
    

    // Creamos una nueva conexion
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $username=$_POST['Izena'];
    $password=$_POST['pass'];
    
    $result=mysql_query("SELECT * from Users where Usuario='$username'");
    
    
    if($row = mysql_fetch_array($result)){
        if($row['Password']==$password){
        session_start();
        header("Location: login.html");
        }
    }
