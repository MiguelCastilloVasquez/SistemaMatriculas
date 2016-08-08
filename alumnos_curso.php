<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ver Curso</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body style="background: #e7e4e5">
        <?php
        include ("conexion_bd.php");
        $id = filter_input(INPUT_GET, 'Id'); 
        $consultaCurso = "select seccion, anio_curso from curso where identificador_curso = '$id' ";
        $datosCurso = $dataBase->query($consultaCurso)->fetchAll(PDO::FETCH_OBJ);
        $consultaAlumnosCurso = "select rut, nombres, a_paterno, a_materno from alumno where Curso_identificador_curso = '$id' order by a_paterno, a_materno asc ";
        $datosAlumnosCurso = $dataBase->query($consultaAlumnosCurso)->fetchAll(PDO::FETCH_OBJ);
        ?>
        <div class="row">
            <nav>
                <div class="nav-wrapper fixed green darken-4">
                    <a class="brand-logo"><img src="img/adven2.png" class="left"></a>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($datosCurso as $curso): ?>
                <h5 class="center indigo-text text-darken-2"><?php echo $curso->seccion . " " . $curso->anio_curso ?></h5>
                <?php endforeach; ?>
            </div>
        <table class="bordered highlight centered responsive-table">
            <thead class="indigo darken-2">
                <th class="white-text">N°</th>    
                <th class="white-text">Apellido Paterno</th>
                <th class="white-text">Apellido Materno</th>
                <th class="white-text">Nombres</th>
                <th class="white-text">Rut</th>
            </thead>
            <?php $i = 0; ?>
            <?php foreach ($datosAlumnosCurso as $alumno): ?>
                <?php $i++; ?>
            <tr>
                <td class="green-text text-darken-3"><?php echo $i; ?></td>
                <td class="green-text text-darken-3"><?php echo $alumno->a_paterno ?></td>
                <td class="green-text text-darken-3"><?php echo $alumno->a_materno ?></td>
                <td class="green-text text-darken-3"><?php echo $alumno->nombres ?></td>
                <td class="green-text text-darken-3"><?php echo $alumno->rut ?></td>
            </tr>
            <?php endforeach; ?>
        </table
        </div>
        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </body>
</html>
