<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultados</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php
            include("conexion_bd.php");
            foreach ($_POST as $clave => $valor) {
                $_SESSION['sesionform'][$clave] = $valor;
            }
            extract($_SESSION['sesionform']);
            $consultaDatos = "SELECT id_alumno, nombres, rut, a_paterno, a_materno "
                    . "FROM alumno WHERE anio_alumno='$anio' and rut='$rut'";
            $datosTabla=$dataBase->query($consultaDatos)->fetchAll(PDO::FETCH_OBJ);
            unset($_SESSION['sesionform']);
        ?>
        <nav>
            <div class="nav-wrapper fixed">
                
            </div>
        </nav>
        <div class="container">
            <table style=" margin-top: 30px;">
            <thead>
                <tr>
                    <th hidden>Id</th>
                    <th>RUT</th>
                    <th>Nombres</th>
                    <th>Ap. Paterno</th>
                    <th>Ap. Materno</th>
                </tr>
            </thead>
            <?php foreach ($datosTabla as $alumno): ?>
                <tr>
                    <td hidden><?php echo $alumno->id_alumno?></td>
                    <td><?php echo $alumno->rut ?></td>
                    <td><?php echo $alumno->nombres ?></td>
                    <td><?php echo $alumno->a_paterno ?></td>
                    <td><?php echo $alumno->a_materno ?></td>
                    <td><a href="datos_alumno.php?ID=<?php echo $alumno->id_alumno?>" 
                           class="btn-floating waves-effect waves-light blue-grey"><i class="material-icons">search</i></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>
        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </body>
</html>

