<?php
    session_start();
    foreach ($_POST as $clave => $valor) {
        $_SESSION['sesionform1'][$clave] = $valor;
    }
    extract($_SESSION['sesionform1']);
    include("conexion_bd.php");
    if(isset($_POST['guardar'])){
        $update = "update escolar set procedencia=:proc, fecha_incorporacion= :inc, problema_aprend=:probl,"
            . "curso_repetido=:rep where identificador_esc=:id";
        $resultadoUpdate = $dataBase->prepare($update);
        $resultadoUpdate->execute(array(":id" => $id, ":proc" => $procedencia, ":inc" => $incorporacion,
        ":probl" => $aprendizaje, ":rep" => $repeticion));
        unset($_SESSION['sesionform1']);
        header("Location:inicio_editar.php");
    }
    
    


