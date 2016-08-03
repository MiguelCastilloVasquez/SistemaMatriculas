<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Buscar Alumno</title>
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
        <!-- Navbar goes here -->
        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <ul class="right hide-on-med-and-down">
                    <a class="btn-floating btn-large waves-effect waves-light blue" href="inicio_administrador.php"><i class="material-icons">home</i></a>
                </ul>
                <a class="brand-logo"><img src="img/adven2.png" class="left"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Sistema de Matrículas CACH</h5></a>
                <a class="brand-logo center"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Buscar Alumno</h5></a>
            </div>
        </nav>
        <div class="container" style="margin-top: 50px">
            <form class="col s12" action="buscar_retiro.php" method="post">
                <div class="row">
                    <div class="input-field col s5">
                        <input placeholder="xx.xxx.xxx-x" id="rut" type="text" class="validate" name="rut" required>
                        <label for="rut" class="black-text">Rut</label>
                    </div>
                    <div class="input-field col s3 offset-s1">
                        <input placeholder="Digite el año" id="anio" type="text" class="validate" name="anio" required>
                        <label for="anio" class="black-text">Año</label>
                    </div>
                </div>
                <div class="row">
                    <a><button class="btn waves-effect waves-light" type="submit" name="buscar">Buscar
                            <i class="material-icons right">search</i>
                        </button></a>
                </div>
            </form>
        </div>
        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".button-collapse").sideNav();
            });

        </script>
    </body>
</html>

