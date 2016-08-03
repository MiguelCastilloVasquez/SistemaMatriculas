<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultados</title>
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
        include("conexion_bd.php");
        foreach ($_POST as $clave => $valor) {
            $_SESSION['sesionform'][$clave] = $valor;
        }
        extract($_SESSION['sesionform']);
        $consultaDatos = "SELECT id_alumno, anio_alumno, nombres, rut, a_paterno, a_materno "
                . "FROM alumno WHERE anio_alumno='$anio' and rut='$rut'";
        $datosTabla = $dataBase->query($consultaDatos)->fetchAll(PDO::FETCH_OBJ);
        unset($_SESSION['sesionform']);
        ?>

        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <ul class="right hide-on-med-and-down">
                    <a class="btn-floating btn-large waves-effect waves-light blue" href="inicio_administrador.php"><i class="material-icons">home</i></a>
                </ul>
                <a class="brand-logo"><img src="img/adven2.png" class="left"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Sistema de Matrículas CACH</h5></a>
                <a class="brand-logo center"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Egresar Alumno</h5></a>
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
                        <th>Año</th>
                    </tr>
                </thead>

                <?php foreach ($datosTabla as $alumno): ?>
                    <tr>
                        <td hidden><?php echo $alumno->id_alumno ?></td>
                        <td><?php echo $alumno->rut ?></td>
                        <td><?php echo $alumno->nombres ?></td>
                        <td><?php echo $alumno->a_paterno ?></td>
                        <td><?php echo $alumno->a_materno ?></td>
                        <td><?php echo $alumno->anio_alumno ?></td>
                        <td><a href="mostrar_egreso.php?ID=<?php echo $alumno->id_alumno ?>" 
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

