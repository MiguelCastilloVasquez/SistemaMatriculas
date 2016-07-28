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
        //
        
        
        $insertarAlumno = "INSERT INTO alumno (a_paterno, a_materno, nombres, sexo ,rut, f_nacimiento, edad, domicilio, comuna, Familiar_identificador_fam, Sige_identificador_sige, Escolar_identificador_esc, Retiro_identificador_retiro, Apoderado_identificador_apod)"
                . "VALUES (:pat,:mat,:nom,:sexo,:rut,:fnac,:edad,:dom,:com, :idfam, :idsige, :idesc, :idret, :idapod)";
        $resultadoInsertarAlumno=$dataBase->prepare($insertarAlumno);
        $resultadoInsertarAlumno->execute(array(":pat"=>$paterno,":mat"=>$materno,":nom"=>$nombre,
            ":sexo"=>$sexo,":rut"=>$run,":fnac"=>$nacimiento,":edad"=>$edad,":dom"=>$domicilio,":com"=>$comuna,":idfam"=>$id_fam, 
            ":idsige"=>$id_sige,":idesc"=>$id_esc, ":idret"=>$id_ret, ":idapod"=>$id_apod));
        
        unset($_SESSION['sesionform1']);
        unset($_SESSION['sesionform2']);
        header("Location:inicio_profesores.php");
    }
