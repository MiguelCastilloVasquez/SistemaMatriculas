<html>
    <head>
        <meta charset="UTF-8">
        <title>Resultados</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body style="background-color: #f5f8f4">
        <?php
        session_start();
        if (!isset($_SESSION["profesor"]) && !isset($_SESSION["administrador"])) {
            header("location:index.php");
        }

        if (isset($_SESSION["profesor"])) {
            $inicio = "inicio_profesores.php";
        } elseif (isset($_SESSION["administrador"])) {
            $inicio = "inicio_administrador.php";
        }

        include("conexion_bd.php");
        foreach ($_POST as $clave => $valor) {
            $_SESSION['sesionform'][$clave] = $valor;
        }
        extract($_SESSION['sesionform']);
        $consultaDatos = "SELECT id_alumno, nombres, rut, a_paterno, a_materno "
                . "FROM alumno WHERE anio_alumno='$anio' and rut='$rut'";
        $datosTabla = $dataBase->query($consultaDatos)->fetchAll(PDO::FETCH_OBJ);
        unset($_SESSION['sesionform']);
        ?>

        <div class="row">
            <nav>
                <div class="nav-wrapper fixed green darken-4">
                    <a class="brand-logo"><img src="img/adven2.png" class="left"></a>
                    <ul class="right hide-on-med-and-down">
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="cerrar_sesion.php" style=" margin-top: 3px;"><i class="material-icons">exit_to_app</i></a>
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="<?php echo $inicio ?>" style=" margin-top: 3px;"><i class="material-icons">home</i></a>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <h5  class="orange-text text-darken-4" style=" margin-top: 30px;">Resultado de la búsqueda:</h5>
            <table style=" margin-top: 30px;" class="bordered highlight centered responsive-table">
                <thead class="orange darken-4">
                    <tr>
                        <th hidden>Id</th>
                        <th class="white-text">RUT</th>
                        <th class="white-text">Nombres</th>
                        <th class="white-text">Ap. Paterno</th>
                        <th class="white-text">Ap. Materno</th>
                    </tr>
                </thead>
                <?php foreach ($datosTabla as $alumno): ?>
                    <tr>
                        <td hidden><?php echo $alumno->id_alumno ?></td>
                        <td class="blue-grey-text"><?php echo $alumno->rut ?></td>
                        <td class=" blue-grey-text"><?php echo $alumno->nombres ?></td>
                        <td class=" blue-grey-text"><?php echo $alumno->a_paterno ?></td>
                        <td class=" blue-grey-text"><?php echo $alumno->a_materno ?></td>
                        <td><a href="datos_alumno.php?ID=<?php echo $alumno->id_alumno ?>" 
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

