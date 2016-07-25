<?php
    include("conexion_bd.php");
    $consultaProfesor = "SELECT* FROM profesor WHERE nombre= :nombre AND password= :password";
    $resultado = $dataBase->prepare($consultaProfesor);
    $nombre = htmlentities(addslashes($_POST["nombre"]));
    $clave = htmlentities(addslashes($_POST["clave"]));
    $resultado->bindValue(":nombre", $nombre);
    $resultado->bindValue(":password", $clave);
    $resultado->execute();
    $filas = $resultado->rowCount();
    if($filas != 0){
        session_start();
        $_SESSION["profesor"]=$_POST["nombre"];
        header("location:inicio_profesores.php");
    }else{
        header("location:login_profesor.php");
    }

