<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista Cursos</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>

        <?php
        session_start();
        if (!isset($_SESSION["profesor"])) {
            header("location:index.php");
        }
        ?>
        <?php
        include("conexion_bd.php");
        $annio = filter_input(INPUT_POST, 'anio_curso');
        $consultaDatos = "SELECT * "
                . "FROM curso WHERE anio_curso='$annio'";
        $datosTabla = $dataBase->query($consultaDatos)->fetchAll(PDO::FETCH_OBJ);
        ?>

        <div class="row">
            <nav>
                <div class="nav-wrapper fixed green darken-4 z-depth-5">
                    <ul class="right hide-on-med-and-down">
                        <a class="btn-floating btn-large waves-effect waves-light blue" href="inicio_administrador.php"><i class="material-icons">home</i></a>
                    </ul>
                    <ul class="right hide-on-med-and-down">
                        <a class="btn-floating btn-large waves-effect waves-light orange" href="filtrar_curso.php"><i class="material-icons">skip_previous</i></a>
                    </ul>
                    <a class="brand-logo"><img src="img/adven2.png" class="left"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Sistema de Matrículas CACH</h5></a>
                    <a class="brand-logo center"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Lista de cursos</h5></a>
                </div>
            </nav>
        </div>

        <div class="container">
            <table style=" margin-top: 30px;">
                <thead>
                    <tr>
                        <th hidden>Id</th>
                        <th>Nombre</th>
                        <th>Cantidad max.</th>
                        <th>Año</th>
                    </tr>
                </thead>
                <?php foreach ($datosTabla as $curso): ?>
                    <tr>
                        <td hidden><?php echo $curso->identificador_curso ?></td>
                        <td><?php echo $curso->seccion ?></td>
                        <td><?php echo $curso->max_cant ?></td>
                        <td><?php echo $curso->anio_curso ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </body>
</html>