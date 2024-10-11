<?php
include'conet.php';


$Consulta ="Select * FROM Usuarios ORDER BY User_Name ASC";

$Ejecuta =$Conecta->query($Consulta);

?>