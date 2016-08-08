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
    <body style="background: #373734">
        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <a class="brand-logo"><img src="img/adven2.png" class="left"></a>
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
                <div class="card-panel green darken-1 center">
                    <span class="white-text">
                        <h5 class="amber-text text-lighten-2" style="text-shadow: 2px 2px 4px black">Misión:</h5>
                        <p class="grey-text text-lighten-2">El Colegio Adventista de Chile fue establecido por la Iglesia Adventista del Séptimo Día para entregar una educación integral que favorezaca el desarrollo de los alumnos en los aspectos intelectuales, afectivo-sociales, físicos y espirituales, posibilitando la formación de una caracter cristiano y preparándolo para una vida de servicio a Dios y al prójimo.</p>
                        <p class="grey-text text-lighten-2">Se sutenta en un concepto de educación que sostiene que el hombre fue creado por Dios "a su imagen y semejanza", pero que producto del pecado se deterioró su condición inicial. Sin embargo, por la gracia de Dios, es perfectible, lo que hace posible que a través de la educación pueda ser restaurada esa imagen divina en el individuo.</p>
                        <p class="grey-text text-lighten-2">Por ser una institución cristiana, fundamentada en principios bíblicos donde el amor a Dios y al prójimo sintetizan su razón de ser, se debe a todas las personas, sin distinciones étnicas, políticas, sociales, económicas, etc. </p>
                        <p class="grey-text text-lighten-2">Al estar inserto en una comunidad con características propias, se plantea objetivos que contribuyan al progreso de ella, preocupándose por la formación de individuos capaces de integrarse constructivamente a esta sociedad</p>
                    </span>
                </div>
            </div>
            <!-- Segunda Columna -->
            <div class="col s6">
                <div class="card-panel center green darken-1">
                    <span class="white-text">
                        <h5 class="amber-text text-lighten-2" style="text-shadow: 2px 2px 4px black">Sistema de Matrículas CACH</h5>
                    </span>
                </div>
                <div class="slider" style=" margin-top: 20px;">
                    <ul class="slides">
                        <li>
                            <img src="img/slider1.jpg"> <!-- random image -->
                            <div class="caption left-align">
                            </div>
                        </li>
                        <li>
                            <img src="img/slider2.jpg"> <!-- random image -->
                            <div class="caption left-align">
                            </div>
                        </li>
                        <li>
                            <img src="img/slider3.jpg"> <!-- random image -->
                            <div class="caption right-align">
                            </div>
                        </li>
                        <li>
                            <img src="img/slider4.jpg"> <!-- random image -->
                            <div class="caption center-align">
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <img src="img/logo.jpg" style="height: 100%; width: 100%;">
                </div>
            </div>
            <!-- Tercera Columna -->
            <div class="col s3">
                <div class="card-panel green darken-1 center">
                    <span class="white-text">
                        <h5 class="amber-text text-lighten-2" style="text-shadow: 2px 2px 4px black">Visión:</h5>
                        <p class="grey-text text-lighten-2">El Colegio Adventista de Chile, proyecta su acción teniendo como fundamento la filosofía cristiana de la educación y un modelo curricular que le permitirá responder al desarrollo integral de sus estudiantes considerando las dimensiones espiritual, mental, social y física de cada uno de ellos.</p>
                        <p class="grey-text text-lighten-2">El currículum ofrece al estudiante una visión bíblica que le provee un claro discernimiento para distinguir la verdad del error, lo que posibilita la existencia de un estudiante capacitado para construir un proyecto de vida en que prime el amor y el servicio a Dios y a su prójimo.</p5>
                        <p class="grey-text text-lighten-2">Esta educación se construye a través del esfuerzo en conjunto de docentes y estudiantes comprometidos con la misión, que actúan con un alto sentido ético, en un ambiente de amor, compañerismo, respeto y solidaridad, contribuyendo positivamente al desarrollo de la sociedad.</p5>
                    </span>
                </div>
                <div class="row">
                    <img src="img/random.png" style="height: 50%; width: 50%; margin-left: 70px; margin-top: 30px;">
                </div>
            </div>
        </div>

        <div class="parallax-container">
            <div class="parallax" style="height: 1000px; width: 100px"><img src="img//parallax2.jpg"></div>
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

        <script>
            $(document).ready(function () {
                $('.parallax').parallax();
            });

        </script>
    </body>

    <footer class="page-footer green darken-4 z-depth-5">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Contacto</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Redes Sociales</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright green darken-4 z-depth-5">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
</html>