<?php
$NameServer = "Localhost";
$NameUser = "root";
$PassServer = "";
$Bd = "Maqueta";
$Conection = new mysqli(hostname: $NameServer, username: $NameUser, password: $PassServer, database: $Maqueta);
if($Conection->connect_error){
    die("Error al conectar con la base de datos". $Conection->connect_error);
}

?>