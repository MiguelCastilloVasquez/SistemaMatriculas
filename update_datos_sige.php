<?php
    session_start();
    foreach ($_POST as $clave => $valor) {
        $_SESSION['sesionform1'][$clave] = $valor;
    }
    extract($_SESSION['sesionform1']);
    include("conexion_bd.php");
    if(isset($_POST['guardar'])){
        $updateSige = "update sige set proced_indigena=:ind, situacion_laboral_asoc=:sit, "
                . "lugar_trab_asoc=:lug, nivel_educacional_asoc=:niv where identificador_sige=:id";
        $resultadoUpdateSige = $dataBase->prepare($updateSige);
        $resultadoUpdateSige->execute(array(":id" => $id, ":ind" => $procedencia_indigena, 
            ":niv" => $educacion_asociado, ":sit" => $situacion_laboral, ":lug" => $lugar_trabajo));
        unset($_SESSION['sesionform1']);
        header("Location:inicio_editar.php");
    }

