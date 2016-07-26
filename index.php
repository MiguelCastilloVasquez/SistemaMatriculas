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
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
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
            <div class="col s8 m8 l8">
                <div class="card-panel teal center">
                    <span class="white-text">Colegio Adventista Chillan
                        <h5 class="left-align">Mision:</h5>
                        <p class="left-align">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>

                        <h5 class="left-align">Vision:</h5>
                        <p class="left-align">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
                    </span>
                </div>
            </div>
            <!-- Segunda Columna -->
            <div class="col s4 m4 l4">
                <div class="slider">
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