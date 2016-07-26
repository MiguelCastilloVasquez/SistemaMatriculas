<?php
    include("conexion_bd.php");
    $consultaAdmin = "SELECT* FROM administrador WHERE nombre= :nombre AND password= :password";
    $resultado = $dataBase->prepare($consultaAdmin);
    $nombre = htmlentities(addslashes($_POST["nombre"]));
    $clave = htmlentities(addslashes($_POST["clave"]));
    $resultado->bindValue(":nombre", $nombre);
    $resultado->bindValue(":password", $clave);
    $resultado->execute();
    $filas = $resultado->rowCount();
    if($filas != 0){
        session_start();
        $_SESSION["administrador"]=$_POST["nombre"];
        header("location:inicio_administrador.php");
    }else{
        header("location:login_administrador.php");
    }

