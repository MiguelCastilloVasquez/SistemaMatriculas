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
    <body>
        <?php
            include ("conexion_bd.php");
            $id = filter_input(INPUT_GET, 'ID');
            $consultaDatosEscolares = "select* from escolar where identificador_esc = '$id' ";
            $datosEscolares = $dataBase->query($consultaDatosEscolares)->fetchAll(PDO::FETCH_OBJ);
        ?>
        <div class="container">
        <table>
            <thead>
                <tr>
                    <th hidden="">ID</th>
                    <th>Procedencia</th>
                    <th>Fecha inc.</th>
                    <th>Problemas de aprend.</th>
                    <th>Curso repetido</th>
                </tr>
            </thead>
            <?php foreach ($datosEscolares as $escolar): ?>
                <tr>
                    <td hidden=""><?php echo $escolar->identificador_esc ?></td>
                    <td><?php echo $escolar->procedencia ?></td>
                    <td><?php echo $escolar->fecha_incorporacion ?></td>
                    <td><?php echo $escolar->problema_aprend ?></td>
                    <td><?php echo $escolar->curso_repetido ?></td>
                    <td><a href="editar_datos_escolares.php?Id=<?php echo $escolar->identificador_esc?> & Proc=<?php echo $escolar->procedencia ?> 
                           & F_inc=<?php echo $escolar->fecha_incorporacion ?> & P_apr=<?php echo $escolar->problema_aprend ?> 
                           & Cur=<?php echo $escolar->curso_repetido ?>" class="btn-floating waves-effect waves-light blue-grey"><i class="material-icons">search</i></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>
    <!-- Adjuntando los archivos JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    </body>
</html>
