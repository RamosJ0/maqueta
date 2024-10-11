<?php
include 'conect.php';
include 'querys.php';
error_reporting(error_level: 0);
session_start();
if (isset($_POST['btnIngresar'])){
    $UserEmail = $connect->real_escape_string($_POST['Email']);
    $Password = $connect->real_escape_string(md5(string: $_POST['password']));
    $Login = "SELECT * FROM Usuarios WHERE EmailUser = '$UserEmail' and Password '$Password' and Id_EstatusUser = '1'";
    if ($Resultado = $connect->query($login)) {
        while ($row = $Resultado->fetch_array()){
            $emailok = $row['Email'];
            $password = $row['Password'];
            $IdPersonal = $row['Id_Usuario'];
        }
        $Resultado->close();
    }
    $connect->close();
    if (isset($UserNick) && isset($Password)) {
        if ($UserNick == $userok && $Password == $passwordok){
            $_SESSION['login'] = TRUE;
            $_SESSION['Usuario'] = $UserNick;
            header(header: "location:AppRamos");

        }else{
            
        }
    }
}