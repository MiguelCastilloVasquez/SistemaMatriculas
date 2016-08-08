<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Datos Alumno</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body style="background: #e7e4e5">
        <?php
        session_start();
        if (!isset($_SESSION["profesor"]) && !isset($_SESSION["administrador"])) {
            header("location:index.php");
        }

        if (isset($_SESSION["profesor"])) {
            $ini = "inicio_profesores.php";
        } elseif (isset($_SESSION["administrador"])) {
            $ini = "inicio_administrador.php";
        }



        include ("conexion_bd.php");
        $id = filter_input(INPUT_GET, 'ID');

        //ids de tablas 
        $consultaIdsTablas = "SELECT Apoderado_identificador_apod, Familiar_identificador_fam, Sige_identificador_sige, "
                . "Escolar_identificador_esc, Retiro_identificador_retiro FROM ALUMNO WHERE id_alumno='$id'";
        $resultadosIdsTablas = $dataBase->query($consultaIdsTablas)->fetchAll(PDO::FETCH_OBJ);
        foreach ($resultadosIdsTablas as $ids) {
            $id_apod = $ids->Apoderado_identificador_apod;
            $id_fam = $ids->Familiar_identificador_fam;
            $id_sige = $ids->Sige_identificador_sige;
            $id_esc = $ids->Escolar_identificador_esc;
            $id_ret = $ids->Retiro_identificador_retiro;
        }

        $consultaDatosPersonales = "select id_alumno, rut, a_paterno, a_materno, nombres, sexo, f_nacimiento, edad, domicilio, comuna, problema_salud from alumno where id_alumno = '$id' ";
        $datosPersonales = $dataBase->query($consultaDatosPersonales)->fetchAll(PDO::FETCH_OBJ);
        $consultaDatosEscolares = "select* from escolar where identificador_esc = '$id_esc' ";
        $datosEscolares = $dataBase->query($consultaDatosEscolares)->fetchAll(PDO::FETCH_OBJ);
        $consultaDatosFamiliares = "select* from familiar where identificador_fam = '$id_fam' ";
        $datosFamiliares = $dataBase->query($consultaDatosFamiliares)->fetchAll(PDO::FETCH_OBJ);
        $consultaDatosApoderado = "select* from apoderado where identificador_apod = '$id_apod' ";
        $datosApoderado = $dataBase->query($consultaDatosApoderado)->fetchAll(PDO::FETCH_OBJ);
        $consultaDatosSige = "select* from sige where identificador_sige = '$id_sige' ";
        $datosSige = $dataBase->query($consultaDatosSige)->fetchAll(PDO::FETCH_OBJ);
        ?>
        <div class="row">
            <nav>
                <div class="nav-wrapper fixed green darken-4">
                    <a class="brand-logo"><img src="img/adven2.png" class="left"></a>
                    <ul class="right hide-on-med-and-down">
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="cerrar_sesion.php" style=" margin-top: 3px;"><i class="material-icons">exit_to_app</i></a>
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="<?php echo $ini ?>" style=" margin-top: 3px;"><i class="material-icons">home</i></a>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container col s12" style="margin-top: 40px;">
            <h5 class="center grey-text text-darken-1">Datos Personales</h5>
            <table class="bordered highlight centered responsive-table">
                <thead class="blue">
                <th hidden>Id</th>
                <th class="white-text">Rut</th>
                <th class="white-text">Nombres</th>
                <th class="white-text">Ap. Paterno</th>
                <th class="white-text">Ap. Materno</th>
                <th class="white-text">Sexo</th>
                <th class="white-text">F. nac.</th>
                <th class="white-text">Edad</th>
                <th class="white-text">Domicilio</th>
                <th class="white-text">Comuna</th>
                <th class="white-text">Probl. Salud</th>
                </thead>
                <?php foreach ($datosPersonales as $personal): ?>
                    <tr>
                        <td hidden><?php echo $personal->id_alumno ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->rut ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->nombres ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->a_paterno ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->a_materno ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->sexo ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->f_nacimiento ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->edad ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->domicilio ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->comuna ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->problema_salud ?></td>
                        <td><a href="editar_datos_personales.php?Id=<?php echo $personal->id_alumno ?> & rut=<?php echo $personal->rut ?> & nom=<?php echo $personal->nombres ?>
                               & pat=<?php echo $personal->a_paterno ?> & mat=<?php echo $personal->a_materno ?> 
                               & sex=<?php echo $personal->sexo ?> & nac=<?php echo $personal->f_nacimiento ?> 
                               & edad=<?php echo $personal->edad ?> & dom=<?php echo $personal->domicilio ?> 
                               & com=<?php echo $personal->comuna ?> & probl=<?php echo $personal->problema_salud ?>" class="btn-floating waves-effect waves-light green"><i class="material-icons">autorenew</i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="container col s12" style="margin-top: 40px;">
            <h5 class="center grey-text text-darken-1">Datos Escolares</h5>
            <table class="bordered highlight centered responsive-table">
                <thead class="blue">
                    <tr>
                        <th hidden="">ID</th>
                        <th class="white-text">Procedencia</th>
                        <th class="white-text">Fecha inc.</th>
                        <th class="white-text">Problemas de aprend.(C/S)</th>
                        <th class="white-text">Curso repetido</th>
                    </tr>
                </thead>
                <?php foreach ($datosEscolares as $escolar): ?>
                    <tr>
                        <td hidden=""><?php echo $escolar->identificador_esc ?></td>
                        <td class="blue-text text-darken-4"><?php echo $escolar->procedencia ?></td>
                        <td class="blue-text text-darken-4"><?php echo $escolar->fecha_incorporacion ?></td>
                        <td class="blue-text text-darken-4"><?php echo $escolar->problema_aprend ?></td>
                        <td class="blue-text text-darken-4"><?php echo $escolar->curso_repetido ?></td>
                        <td class="blue-text text-darken-4"><a href="editar_datos_escolares.php?Id=<?php echo $escolar->identificador_esc ?> & Proc=<?php echo $escolar->procedencia ?> 
                                                               & F_inc=<?php echo $escolar->fecha_incorporacion ?> & P_apr=<?php echo $escolar->problema_aprend ?> 
                                                               & Cur=<?php echo $escolar->curso_repetido ?>" class="btn-floating waves-effect waves-light green"><i class="material-icons">autorenew</i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="container col s12" style="margin-top: 40px;">
            <h5 class="center grey-text text-darken-1">Datos Familiares</h5>
            <table class="bordered highlight centered responsive-table">
                <thead class="blue">
                <th hidden>Id</th>
                <th class="white-text">Niv. Educacional Padre</th>
                <th class="white-text">Niv. Educacional Madre</th>
                <th class="white-text">Persona con quien vive</th>
                </thead>
                <?php foreach ($datosFamiliares as $familiar): ?>
                    <tr>
                        <td hidden><?php echo $familiar->identificador_fam ?></td>
                        <td class="blue-text text-darken-4"><?php echo $familiar->nivel_educ_padre ?></td>
                        <td class="blue-text text-darken-4"><?php echo $familiar->nivel_educ_madre ?></td>
                        <td class="blue-text text-darken-4"><?php echo $familiar->con_quien_vive ?></td>
                        <td><a href="editar_datos_familiares.php?Id=<?php echo $familiar->identificador_fam ?> 
                               & nep=<?php echo $familiar->nivel_educ_padre ?> & nem=<?php echo $familiar->nivel_educ_madre ?> 
                               & cqv=<?php echo $familiar->con_quien_vive ?>" class="btn-floating waves-effect waves-light green"><i class="material-icons">autorenew</i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="container col s12" style="margin-top: 20px;">
            <h5 class="center grey-text text-darken-1">Datos Apoderado</h5>
            <table class="bordered highlight centered responsive-table">
                <thead class="blue">
                <th hidden>Id</th>
                <th class="white-text">Nombre</th>
                <th class="white-text">Apellido</th>
                <th class="white-text">Domicilio</th>
                <th class="white-text">Correo</th>
                <th class="white-text">Fono emergencia</th>
                </thead>
                <?php foreach ($datosApoderado as $apoderado): ?>
                    <tr>
                        <td hidden><?php echo $apoderado->identificador_apod ?></td>
                        <td class="blue-text text-darken-4"><?php echo $apoderado->nombre ?></td>
                        <td class="blue-text text-darken-4"><?php echo $apoderado->apellido ?></td>
                        <td class="blue-text text-darken-4"><?php echo $apoderado->domicilio ?></td>
                        <td class="blue-text text-darken-4"><?php echo $apoderado->correo ?></td>
                        <td class="blue-text text-darken-4"><?php echo $apoderado->fono_emerg ?></td>
                        <td><a href="editar_datos_apoderado.php?Id=<?php echo $apoderado->identificador_apod ?> & nom=<?php echo $apoderado->nombre ?>
                               & ape=<?php echo $apoderado->apellido ?> & dom=<?php echo $apoderado->domicilio ?> & corr=<?php echo $apoderado->correo ?>
                               & fon=<?php echo $apoderado->fono_emerg ?>" class="btn-floating waves-effect waves-light green"><i class="material-icons">autorenew</i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="container col s12" style="margin-top: 40px;">
            <h5 class="center grey-text text-darken-1">Datos SIGE</h5>
            <table class="bordered highlight centered responsive-table">
                <thead class="blue">
                <th hidden>Id</th>
                <th class="white-text">Procedencia indígena</th>
                <th class="white-text">Situación laboral persona asoc.</th>
                <th class="white-text">Lugar de trabajo persona asoc.</th>
                <th class="white-text">Nivel educacional persona asoc.</th>
                </thead>
                <?php foreach ($datosSige as $sige): ?>
                    <tr>
                        <td hidden><?php echo $sige->identificador_sige ?></td>
                        <td class="blue-text text-darken-4"><?php echo $sige->proced_indigena ?></td>
                        <td class="blue-text text-darken-4"><?php echo $sige->situacion_laboral_asoc ?></td>
                        <td class="blue-text text-darken-4"><?php echo $sige->lugar_trab_asoc ?></td>
                        <td class="blue-text text-darken-4"><?php echo $sige->nivel_educacional_asoc ?></td>
                        <td><a href="editar_datos_sige.php?Id=<?php echo $sige->identificador_sige ?> & ind=<?php echo $sige->proced_indigena ?> & lab=<?php echo $sige->situacion_laboral_asoc ?>
                               & lug=<?php echo $sige->lugar_trab_asoc ?> & niv=<?php echo $sige->nivel_educacional_asoc ?>" class="btn-floating waves-effect waves-light green"><i class="material-icons">autorenew</i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </body>
</html>
