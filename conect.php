<?php
$NameServer = "Localhost";
$NameUser = "root";
$PassServer = "";
$Bd = "Master";
$Conection = new mysqli(hostname: $NameServer, username: $NameUser, password: $PassServer, database: $Bd);
if($Conection->connect_error){
    die("Error al conectar con la base de datos". $Conection->connect_error);
}

?>