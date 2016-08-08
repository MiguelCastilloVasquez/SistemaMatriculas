<?php
    include("conexion_bd.php");
    $consultaProfesor = "SELECT* FROM profesor WHERE correo= :correo AND password= :password";
    $resultado = $dataBase->prepare($consultaProfesor);
    $email = htmlentities(addslashes($_POST["correo"]));
    $clave = htmlentities(addslashes($_POST["clave"]));
    $resultado->bindValue(":correo", $email);
    $resultado->bindValue(":password", $clave);
    $resultado->execute();
    $filas = $resultado->rowCount();
    if($filas != 0){
        session_start();
        $_SESSION["profesor"]=$_POST["correo"];
        header("location:inicio_profesores.php");
    }else{
        header("location:login_profesores.php");
    }

