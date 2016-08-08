<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Cursos</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body style="background: #e7e4e5">
        <?php
        include ("conexion_bd.php");
        $anio = date ("Y");
        $consultaDatosCurso = "select identificador_curso, seccion, anio_curso from curso "
                . "where anio_curso = '$anio' ";
        $datosCurso = $dataBase->query($consultaDatosCurso)->fetchAll(PDO::FETCH_OBJ);
        ?>
         <div class="row">
            <nav>
                <div class="nav-wrapper fixed green darken-4">
                    <a class="brand-logo"><img src="img/adven2.png" class="left"></a>
                </div>
            </nav>
        </div>
        <div class="container col s6">
            <h5 class="center indigo-text text-darken-2">Lista de Cursos</h5>
            <table class="bordered highlight centered responsive-table">
                <thead class="indigo darken-2">
                    <th hidden>Id</th>
                    <th class="white-text">Curso</th>
                    <th class="white-text">Año</th>
                </thead>
                <?php foreach ($datosCurso as $curso): ?>
                <tr>
                    <td hidden><?php echo $curso->identificador_curso ?></td>
                    <td class="indigo-text text-darken-2" style="width: 200px;"><?php echo $curso->seccion ?></td>
                    <td class="indigo-text text-darken-2" style="width: 700px;"><?php echo $curso->anio_curso ?></td>
                    <td><a href="alumnos_curso.php?Id=<?php echo $curso->identificador_curso ?>"
                           class="btn-floating waves-effect waves-light orange"><i class="material-icons">visibility</i></a></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </body>
</html>
