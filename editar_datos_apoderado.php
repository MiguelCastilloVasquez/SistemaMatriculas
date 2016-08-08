<!DOCTYPE html>
<html>
    <head>
        <title>Editar datos apoderado</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body style="background: #e5e4e4">
        <?php
        session_start();
        if (!isset($_SESSION["profesor"]) && !isset($_SESSION["administrador"])) {
            header("location:index.php");
        }
        if(isset($_SESSION["profesor"])){
            $hai = "inicio_profesores.php";
        }elseif(isset($_SESSION["administrador"])){
            $hai = "inicio_administrador.php";
        }
        $id = filter_input(INPUT_GET, 'Id');
        $nom = filter_input(INPUT_GET, 'nom');
        $ape = filter_input(INPUT_GET, 'ape');
        $dom = filter_input(INPUT_GET, 'dom');
        $corr = filter_input(INPUT_GET, 'corr');
        $fon = filter_input(INPUT_GET, 'fon');
        ?>
        <div class="row">
            <nav>
                <div class="nav-wrapper fixed green darken-4">
                    <a class="brand-logo"><img src="img/adven2.png" class="left"></a>
                    <ul class="right hide-on-med-and-down">
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="cerrar_sesion.php" style=" margin-top: 3px;"><i class="material-icons">exit_to_app</i></a>
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="<?php echo $hai?>" style=" margin-top: 3px;"><i class="material-icons">home</i></a>
                    </ul>
                </div>
            </nav>
         </div>
        <div class="container" style="margin-top: 50px">
            <form class="col s12" action="update_datos_apoderado.php" method="post">
                <div class="row">
                    <input id="id" type="hidden" class="validate" name="id" value="<?php echo $id ?>">
                    <label for="id"></label>
                    <div class="row"><h5 class="teal-text text-darken-4">Editar datos apoderado</h5></div>
                    <div class="input-field col s3">
                        <input id="nombre-tutor" type="text" class="validate" name="nombre_tutor" required value="<?php echo $nom ?>">
                        <label>Nombre*</label>
                    </div>

                    <div class="input-field col s3 push-s1">
                        <input id="apellido-tutor" type="text" class="validate" name="apellido_tutor" required value="<?php echo $ape ?>">
                        <label>Apellido*</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input id="domiclio-tutor" type="text" class="validate" name="domicilio_tutor" required value="<?php echo $dom ?>">
                        <label for="domicilio-tutor">Domicilio*</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="correo_tutor" type="email" class="validate" name="correo_tutor"<?php echo $corr ?>">
                        <label for="correo_tutor" data-error="formato incorrecto">Correo</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="emergencia-tutor" type="text" class="validate" name="emergencia_tutor"<?php echo $fon ?>">
                        <label for="emergencia-tutor" data-error="formato incorrecto">Numero emergencia</label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light teal darken-4" type="submit" name="guardar">Guardar
                        <i class="material-icons right">save</i>
                    </button>
                </div>
            </form>
        </div>



        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>

        <script>
            $(document).ready(function () {
                $('select').material_select();
            });
        </script>
    </body>
</html>
