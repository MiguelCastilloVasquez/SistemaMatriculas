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
    <body style="background-color: #f5f8f4">
        <?php
        session_start();
        if(!isset($_SESSION["profesor"])&&!isset($_SESSION["administrador"])){
            header("location:index.php");
        }
        
        if(isset($_SESSION["profesor"])){
            $home = "inicio_profesores.php";
        }elseif(isset($_SESSION["administrador"])){
            $home = "inicio_administrador.php";
        }
        ?>
         <!-- Navbar goes here -->
         <div class="row">
            <nav>
                <div class="nav-wrapper fixed green darken-4">
                    <a class="brand-logo"><img src="img/adven2.png" class="left"></a>
                    <ul class="right hide-on-med-and-down">
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="cerrar_sesion.php" style=" margin-top: 3px;"><i class="material-icons">exit_to_app</i></a>
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="<?php echo $home?>" style=" margin-top: 3px;"><i class="material-icons">home</i></a>
                    </ul>
                </div>
            </nav>
         </div>
         
         <div class="container" style="margin-top: 40px;">
             <h5 class="blue-text text-darken-4">Buscar alumno</h5>
            <div class="row" style="margin-top: 40px;">
                <form class="col s12" action="buscar_alumno.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <input placeholder="Digite aquí el rut" id="rut" type="text" class="validate" name="rut" required>
                            <label for="rut" class="blue-text text-darken-4" style="font-size: 15px;">RUT</label>
                        </div>
                        <div class="input-field col s6">
                            <input placeholder="Digite aquí el año" id="anio" type="text" class="validate" name="anio" required>
                            <label for="anio" class="blue-text text-darken-4" style="font-size: 15px;">Año</label>
                        </div>
                    </div>
                    <div class="row">
                        <a><button class="btn waves-effect waves-light blue darken-4" type="submit" name="buscar">Buscar
                            <i class="material-icons right">search</i>
                        </button></a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/jquery.Rut.js"></script>
        <script>
           $(document).ready(function () {
                $(".button-collapse").sideNav();
            });
   
        </script>
        <script>
            $(document).ready(function () {
               $('#rut').Rut({
                 on_error: function(){ alert('Rut incorrecto'); }   
               });
            });
        </script>
     </body>
</html>

