<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <nav>
            <div class="nav-wrapper fixed green darken-4">
                <a class="brand-logo"><img src="img/adventista.png" style="height: 9%; width: 9%;"></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="login_profesores.php"><i class="material-icons left">people</i>Profesores</a></li>
                    <li><a href="login_administrador.php"><i class="material-icons left">person</i>Administrador</a></li>
                </ul>
            </div>
        </nav>

        <div class="row" >
            <div class="col s3" style="background: red">
                <div>
                    Campo 1
                    <a href="#">CAS</a>
                </div>                
            </div>

            <div class="col s6" style="background: yellowgreen">
                <div>
                    Campo 2
                </div>
            </div>

            <div class="col s3" style="background: blue">
                <h5 class="center-align">Imagenes</h5>
            </div>
        </div>

        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </body>
</html>