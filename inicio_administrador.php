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
        <?php
        session_start();
        if(!isset($_SESSION["administrador"])){
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
            <div class="container">
                <div class="col s3">
                    <div class="side-nav fixed green darken-1">
                        <a class="brand-logo"><img src="img/adven2.png" class="left"></a>
                        <li><a href="agregar_profesor.php" class="amber-text text-accent-1" style="font-size: 17px;">Añadir Profesor</a></li>
                        <li><a href="#" class="amber-text text-accent-1" style="font-size: 17px;">Editar Alumno</a></li>
                        <li><a href="#" class="amber-text text-accent-1" style="font-size: 17px;">Retirar Alumno</a></li>
                        <li><a href="#" class="amber-text text-accent-1" style="font-size: 17px;">Generar Documento</a></li>
                    </div>
                </div>
            </div>
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

