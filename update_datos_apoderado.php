<?php
    session_start();
    foreach ($_POST as $clave => $valor) {
        $_SESSION['sesionform1'][$clave] = $valor;
    }
    extract($_SESSION['sesionform1']);
    include("conexion_bd.php");
    if(isset($_POST['guardar'])){
        $updateApoderado = "update apoderado set nombre=:nom, apellido=:ape, domicilio=:dom, "
                . "correo=:corr, fono_emerg=:fon where identificador_apod=:id";
        $resultadoUpdateApoderado = $dataBase->prepare($updateApoderado);
        $resultadoUpdateApoderado->execute(array(":id" => $id, ":nom" => $nombre_tutor, 
            ":ape" => $apellido_tutor, ":dom" => $domicilio_tutor, ":corr" => $correo_tutor,
            ":fon" => $emergencia_tutor));
        unset($_SESSION['sesionform1']);
        header("Location:inicio_editar.php");
    }

