<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Datos Retiro</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php
        session_start();
        if (!isset($_SESSION["administrador"])) {
            header("location:index.php");
        }
        ?>
        <?php
        include ("conexion_bd.php");
        $id = filter_input(INPUT_GET, 'ID');
        $consultaDatosPersonales = "select id_alumno, anio_alumno, rut, a_paterno, a_materno, nombres from alumno where id_alumno = '$id' ";
        $datosPersonales = $dataBase->query($consultaDatosPersonales)->fetchAll(PDO::FETCH_OBJ);
        $consultaDatosRetiro = "select* from retiro where identificador_retiro = '$id' ";
        $datosRetiro = $dataBase->query($consultaDatosRetiro)->fetchAll(PDO::FETCH_OBJ);
        ?>

        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <ul class="right hide-on-med-and-down">
                    <a class="btn-floating btn-large waves-effect waves-light blue" href="inicio_administrador.php"><i class="material-icons">home</i></a>
                </ul>
                <a class="brand-logo"><img src="img/adven2.png" class="left"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Sistema de Matrículas CACH</h5></a>
                <a class="brand-logo center"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Datos Retiro</h5></a>
            </div>
        </nav>

        <div class="container col s12" style="margin-top: 40px;">
            <h5 class="center grey-text text-darken-1">Datos Personales</h5>
            <table class="bordered highlight centered responsive-table">
                <thead class="blue">
                <th hidden>Id</th>
                <th class="white-text">Rut</th>
                <th class="white-text">Nombres</th>
                <th class="white-text">Ap. Paterno</th>
                <th class="white-text">Ap. Materno</th>
                <th class="white-text">Año</th>

                </thead>
                <?php foreach ($datosPersonales as $personal): ?>
                    <tr>
                        <td hidden><?php echo $personal->id_alumno ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->rut ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->nombres ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->a_paterno ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->a_materno ?></td>
                        <td class="blue-text text-darken-4"><?php echo $personal->anio_alumno ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <div class="container col s12" style="margin-top: 40px;">
            <h5 class="center grey-text text-darken-1">Datos Retiro</h5>
            <table class="bordered highlight centered responsive-table">
                <thead class="blue">
                    <tr>
                        <th hidden="">ID</th>
                        <th class="white-text">Fecha retiro</th>
                        <th class="white-text">Motivo Retiro</th>
                    </tr>
                </thead>
                <?php foreach ($datosRetiro as $retiro): ?>
                    <tr>
                        <td hidden=""><?php echo $retiro->identificador_retiro ?></td>
                        <td class="blue-text text-darken-4"><?php echo $retiro->fecha_retiro ?></td>
                        <td class="blue-text text-darken-4"><?php echo $retiro->motivo_retiro ?></td>
                        <td class="blue-text text-darken-4"><a href="agregar_retiro.php?Id=<?php echo $retiro->identificador_retiro ?> & fecha=<?php echo $retiro->fecha_retiro ?> 
                                                               & motivo=<?php echo $retiro->motivo_retiro ?>
                                                               "class="btn-floating waves-effect waves-light green"><i class="material-icons">edit</i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
      
        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </body>
</html>