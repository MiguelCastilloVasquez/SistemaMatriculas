<?php
    session_start();
    foreach ($_POST as $clave => $valor) {
        $_SESSION['sesionform1'][$clave] = $valor;
    }
    extract($_SESSION['sesionform1']);
    include("conexion_bd.php");
    if(isset($_POST['guardar'])){
        $updateFamiliar = "update familiar set nivel_educ_padre=:nep, nivel_educ_madre=:nem,"
                . "con_quien_vive=:cqv where identificador_fam=:id";
        $resultadoUpdateFamiliar = $dataBase->prepare($updateFamiliar);
        $resultadoUpdateFamiliar->execute(array(":id" => $id, ":nep" => $educacion_padre, 
            ":nem" => $educacion_madre, ":cqv" => $con_quien_vive));
        unset($_SESSION['sesionform1']);
        header("Location:inicio_editar.php");
    }
