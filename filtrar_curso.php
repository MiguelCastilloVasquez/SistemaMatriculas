<!DOCTYPE html>
<html>
    <head>
        <title>Buscar Curso</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php
        session_start();
        if (!isset($_SESSION["profesor"]) && !isset($_SESSION["administrador"])) {
            header("location:index.php");
        }
        ?>
        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <ul class="right hide-on-med-and-down">
                    <a class="btn-floating btn-large waves-effect waves-light blue" href="inicio_administrador.php"><i class="material-icons">home</i></a>
                </ul>
                <a class="brand-logo"><img src="img/adven2.png" class="left"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Sistema de Matrículas CACH</h5></a>
                <a class="brand-logo center"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Buscar Cursos</h5></a>
            </div>
        </nav>

        <div class="row" style="margin-top: 60px">
            <form class="col s6 offset-s2" action="mostrar_cursos.php" method="post"> 
                <table>
                    <tr>
                        <td>
                            <div class="input-field col s6">
                                <input placeholder="Digite aquí el año" id="anio_curso" type="text" class="validate" name="anio_curso" required>
                                <label for="anio_curso">Año</label>
                            </div
                        </td>
                        <td>
                            <a><button class="btn waves-effect waves-light" type="submit" name="buscar">Buscar
                                    <i class="material-icons right">search</i>
                                </button></a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </body>
</html>