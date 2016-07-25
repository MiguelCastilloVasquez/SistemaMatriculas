<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body style="background: grey">
        <nav>
            <div class="nav-wrapper fixed green darken-4">
                <a class="brand-logo"><img src="img/adven2.png" class="left"><h5>Sistema de Matrículas CACH</h5></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="login_profesores.php"><i class="material-icons left">people</i>Profesores</a></li>
                    <li><a href="login_administrador.php"><i class="material-icons left">person</i>Administrador</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="login_profesores.php"><i class="material-icons left">people</i>Profesores</a></li>
                    <li><a href="login_administrador.php"><i class="material-icons left">person</i>Administrador</a></li>
                </ul>
            </div>
        </nav>

        <div class="row" >
            <!-- Primera Columna -->
            <div class="col s3">
                <div class="card-panel teal">
                    <span class="white-text">Sistema de matriculas creado para los docentes del Colegio Adventista de Chillan.
                    </span>
                </div>
            </div>
            <!-- Segunda Columna -->
            <div class="col s6">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="img/slider1.jpg"> <!-- random image -->
                            <div class="caption left-align">
                                <h3 class="white-text">Colegio Adventista Chillan</h3>
                                <h5 class="light grey-text text-lighten-3">120 Años</h5>
                            </div>
                        </li>
                        <li>
                            <img src="img/slider2.jpg"> <!-- random image -->
                            <div class="caption left-align">
                                <h3>Left Aligned Caption</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="img/slider3.jpg"> <!-- random image -->
                            <div class="caption right-align">
                                <h3>Right Aligned Caption</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                        <li>
                            <img src="img/slider4.jpg"> <!-- random image -->
                            <div class="caption center-align">
                                <h3>This is our big Tagline!</h3>
                                <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Tercera Columna -->
            <div class="col s3" style="background: blue">

            </div>
        </div>


        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script >
            $(document).ready(function () {
                $(".button-collapse").sideNav();
            })
        </script>
        <script>
            $(document).ready(function () {
                $('.slider').slider({full_width: true});
            });
        </script>
    </body>
</html>