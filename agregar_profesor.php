<!DOCTYPE html>
<html>
    <head>
        <title>Agregar Profesor</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script>
            function validate() {
                var a = document.getElementById("pass").value;
                var b = document.getElementById("repass").value;
                if (a != b) {
                    alert("Contraseñas no coinciden");
                    return false;
                }
            }
        </script>
    </head>
    <body>
        <?php
        session_start();
        if (!isset($_SESSION["administrador"])) {
            header("location:index.php");
        }
        ?>

        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <ul class="right hide-on-med-and-down">
                    <a class="btn-floating btn-large waves-effect waves-light blue" href="inicio_administrador.php"><i class="material-icons">home</i></a>
                </ul>
                <a class="brand-logo"><img src="img/adven2.png" class="left"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Sistema de Matrículas CACH</h5></a>
                <a class="brand-logo center"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Agregar Profesor</h5></a>
            </div>
        </nav>


        <div class="container" style="margin-top: 50px">
            <form class="col s12" action="registrar_profesor.php" method="post" onsubmit="return validate()">
                <div class="row">
                    <div class="input-field col s3">
                        <input id="name" type="text" class="validate" name="name" required/>
                        <label>Nombre*</label>
                    </div>
                    <div class="input-field col s3 offset-s1">
                        <input id="apellido" type="text" class="validate" name="apellido" required/>
                        <label>Apellido*</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <input id="correo" type="email" class="validate" name="correo" required/>
                        <label>Correo*</label>
                    </div>                    
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <input id="pass" type="password" class="validate" name="pass" required/>
                        <label>Contraseña*</label>
                    </div>
                    <div class="input-field col s3 offset-s1">
                        <input id="repass" type="password" class="validate" name="repass" required/>
                        <label>Repita Contraseña*</label>
                    </div> 
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="crear">Crear Profesor
                        <i class="material-icons right">create</i>
                    </button>
                </div>
            </form>
        </div>

        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </body>
</html>