<?php
    session_start();
    foreach ($_POST as $clave => $valor) {
        $_SESSION['sesionform4'][$clave] = $valor;
    }
    extract($_SESSION['sesionform1']);
    extract($_SESSION['sesionform2']);
    extract($_SESSION['sesionform3']);
    extract($_SESSION['sesionform4']);
    include("conexion_bd.php");
    if(isset($_POST['enviar'])){
        $idCurso = rand(1,16);
        $anio = date("Y");
        $fecha_egreso = "";
        //Insertando datos escolares
        $insertarDatosEscolares = "INSERT INTO escolar (procedencia, fecha_incorporacion, problema_aprend, curso_repetido) "
                . "VALUES (:proc, :fecha_inc, :prob_aprend, :curso_rep)";
        $resultadoInsertarDatosEscolares = $dataBase->prepare($insertarDatosEscolares);
        $resultadoInsertarDatosEscolares->execute(array(":proc" => $procedencia, ":fecha_inc" => $incorporacion,
            ":prob_aprend" => $aprendizaje, ":curso_rep" => $repeticion ));
        //Insertando datos familiares
        $insertarDatosFamiliares = "INSERT INTO familiar (nivel_educ_padre, nivel_educ_madre, con_quien_vive) "
                . "VALUES (:nep, :nem, :cqv)";
        $resultadoInsertarDatosFamiliares = $dataBase->prepare($insertarDatosFamiliares);
        $resultadoInsertarDatosFamiliares->execute(array(":nep" => $educacion_padre, ":nem" => $educacion_madre,
            "cqv" => $con_quien_vive));
        //Insertando datos apoderado
        $insertarDatosApoderado = "INSERT INTO apoderado (nombre, apellido, domicilio, correo, fono_emerg) "
                . "VALUES (:nom, :ape, :dom, :corr, :fon_emerg)";
        $resultadoInsertarApoderado = $dataBase->prepare($insertarDatosApoderado);
        $resultadoInsertarApoderado->execute(array(":nom" => $nombre_tutor, ":ape" => $apellido_tutor,
            ":dom" => $domicilio_tutor, ":corr" => $correo_tutor, ":fon_emerg" => $emergencia_tutor));
        $rs = mysql_query("SELECT MAX(identificador_apod) AS id FROM apoderado");
        //Insertando datos SIGE
        $insertarDatosSige = "INSERT INTO sige (proced_indigena, situacion_laboral_asoc, lugar_trab_asoc, nivel_educacional_asoc) "
                . "VALUES (:ind, :sit_lab, :trab_asoc, :sit_acad)";
        $resultadoInsertarDatosSige = $dataBase->prepare($insertarDatosSige);
        $resultadoInsertarDatosSige->execute(array(":ind" => $procedencia_indigena, ":sit_lab" => $situacion_laboral,
            ":trab_asoc" => $lugar_trabajo, ":sit_acad" => $educacion_asociado));
        //Insertando datos retiro
        $fecha_retiro = "";
        $motivo_retiro = "";
        $insertarRetiro = "INSERT INTO retiro (fecha_retiro, motivo_retiro) "
                . "VALUES (:fec_ret, :mot_ret)";
        $resultadoInsertarRetiro = $dataBase->prepare($insertarRetiro);
        $resultadoInsertarRetiro->execute(array(":fec_ret" => $fecha_retiro, "mot_ret" => $motivo_retiro));
        $id = $dataBase->lastInsertId();
        //Insertando datos alumno
        $insertarAlumno = "INSERT INTO alumno (a_paterno, a_materno, nombres, sexo ,rut, f_nacimiento, edad, domicilio, comuna, problema_salud, anio_alumno, fecha_egreso, Familiar_identificador_fam, Sige_identificador_sige, Escolar_identificador_esc, Retiro_identificador_retiro, Apoderado_identificador_apod, Curso_identificador_curso)"
                . "VALUES (:pat,:mat,:nom,:sexo,:rut,:fnac,:edad,:dom,:com, :prob_sal, :anio, :fec_egre, :idfam, :idsige, :idesc, :idret, :idapod, :idCurso)";
        $resultadoInsertarAlumno=$dataBase->prepare($insertarAlumno);
        $resultadoInsertarAlumno->execute(array(":pat"=>$paterno,":mat"=>$materno,":nom"=>$nombre,
            ":sexo"=>$sexo,":rut"=>$run,":fnac"=>$nacimiento,":edad"=>$edad,":dom"=>$domicilio,":com"=>$comuna,
            ":prob_sal" => $enfermedad, ":anio" => $anio, ":fec_egre" => $fecha_egreso, ":idfam"=>$id, ":idsige"=>$id,":idesc"=>$id, ":idret"=>$id, ":idapod"=>$id, ":idCurso" => $idCurso));
        
        unset($_SESSION['sesionform1']);
        unset($_SESSION['sesionform2']);
        unset($_SESSION['sesionform3']);
        unset($_SESSION['sesionform4']);
        header("Location:inicio_profesores.php");
    }


