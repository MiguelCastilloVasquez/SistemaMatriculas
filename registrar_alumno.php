<?php
    session_start();
    foreach ($_POST as $clave => $valor) {
        $_SESSION['sesionform2'][$clave] = $valor;
    }
    extract($_SESSION['sesionform1']);
    extract($_SESSION['sesionform2']);
    include("conexion_bd.php");
    if(isset($_POST['enviar'])){
        $id_fam=1;
        $id_sige=1;
        $id_ret=1;
        $id_apod=1;
        $id_esc=2;
        $insertarDatosEscolares = "INSERT INTO escolar (procedencia) VALUES (:proc)";
        $resultadoInsertarDatosEscolares = $dataBase->prepare($insertarDatosEscolares);
        $resultadoInsertarDatosEscolares->execute(array(":proc" => $procedencia));
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
