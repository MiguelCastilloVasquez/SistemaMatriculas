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
        if(!isset($_SESSION["profesor"])){
            header("location:index.php");
        }
        ?>
         <!-- Navbar goes here -->
         <div class="row">
            <nav>
                <div class="nav-wrapper fixed green darken-4">
                    <ul class="right hide-on-med-and-down">
                        <a class="btn-floating btn-large waves-effect waves-light blue" href="cerrar_sesion.php"><i class="material-icons">exit_to_app</i></a>
                    </ul>
                </div>
            </nav>
         </div>
         <div class="row">
             <form class="col s12" action="buscar_alumno.php" method="post">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Digite aquí el rut" id="rut" type="text" class="validate" name="rut">
                        <label for="rut">RUT</label>
                    </div>
                    <div class="input-field col s6">
                        <input placeholder="Digite aquí el año" id="anio" type="text" class="validate" name="anio">
                        <label for="anio">Anio</label>
                    </div>
                </div>
                <div class="row">
                    <a><button class="btn waves-effect waves-light" type="submit" name="buscar">Buscar
                        <i class="material-icons right">search</i>
                    </button></a>
                </div>
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

