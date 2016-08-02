<?php
    session_start();
    foreach ($_POST as $clave => $valor) {
        $_SESSION['sesionform1'][$clave] = $valor;
    }
    extract($_SESSION['sesionform1']);
    include("conexion_bd.php");
    if(isset($_POST['guardar'])){
        $updateAlumno = "update alumno set rut=:run, a_paterno=:pat, a_materno=:mat, "
                . "nombres=:nom, sexo=:sex, f_nacimiento=:nac, edad=:edad,"
                . "domicilio=:dom, comuna=:com, problema_salud=:enf where id_alumno=:id";
        $resultadoUpdateAlumno = $dataBase->prepare($updateAlumno);
        $resultadoUpdateAlumno->execute(array(":id" => $id, ":run" => $run, ":pat" => $paterno, ":mat" => $materno,
                ":nom" => $nombre, ":sex" => $sexo, ":nac" => $nacimiento, ":edad" => $edad,
            ":dom" => $domicilio, ":com" => $comuna, ":enf" => $enfermedad));
        unset($_SESSION['sesionform1']);
        header("Location:inicio_editar.php");
    }