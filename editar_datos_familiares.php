<!DOCTYPE html>
<html>
    <head>
        <title>Editar datos familiares</title>
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
            $h = "inicio_profesores.php";
        }elseif(isset($_SESSION["administrador"])){
            $h = "inicio_administrador.php";
        }
        $id = filter_input(INPUT_GET, 'Id');
        $nep = filter_input(INPUT_GET, 'nep');
        $nem = filter_input(INPUT_GET, 'nem');
        $cqv = filter_input(INPUT_GET, 'cqv');
        ?>
        <div class="row">
            <nav>
                <div class="nav-wrapper fixed green darken-4">
                    <a class="brand-logo"><img src="img/adven2.png" class="left"></a>
                    <ul class="right hide-on-med-and-down">
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="cerrar_sesion.php" style=" margin-top: 3px;"><i class="material-icons">exit_to_app</i></a>
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="<?php echo $h?>" style=" margin-top: 3px;"><i class="material-icons">home</i></a>
                    </ul>
                </div>
            </nav>
         </div>
        <div class="container" style="margin-top: 50px">
            <h5 class="teal-text text-darken-4">Editar datos familiares</h5>
            <form class="col s12" action="update_datos_familiares.php" method="post">
                <div class="row">
                    <input id="id" type="hidden" class="validate" name="id" value="<?php echo $id ?>">
                    <label for="id"></label>
                    <div class="row" style="margin-top: 50px;"><p class="blue-grey-text">NIVEL EDUCACIONAL PADRES</p></div>
                    <div class="input-field col s3">
                        <p class="blue-grey-text">Padre*</p>
                        <select name="educacion_padre" required class="browser-default">
                            <option value="<?php echo $nep ?>" selected><?php echo $nep ?></option>
                            <option value="Basica Incompleta">Basica Incompleta</option>
                            <option value="Basica Completa">Basica Completa</option>
                            <option value="Media Incompleta">Media Incompleta</option>
                            <option value="Media Completa">Media Completa</option>
                            <option value="Superior Incompleta">Superior Incompleta</option>
                            <option value="Superior Completa">Superior Completa</option>
                        </select>
                    </div>

                    <div class="input-field col s3">
                        <p class="blue-grey-text">Madre*</p>
                        <select required name="educacion_madre" class="browser-default">
                            <option value="<?php echo $nem ?>" selected><?php echo $nem ?></option>
                            <option value="Basica Incompleta">Basica Incompleta</option>
                            <option value="Basica Completa">Basica Completa</option>
                            <option value="Media Incompleta">Media Incompleta</option>
                            <option value="Media Completa">Media Completa</option>
                            <option value="Superior Incompleta">Superior Incompleta</option>
                            <option value="Superior Completa">Superior Completa</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <p class="blue-grey-text">Persona con quien vive*</p>
                        <select name="con_quien_vive" required class="browser-default">
                            <option value="<?php echo $cqv ?>" selected><?php echo $cqv ?></option>
                            <option value="Padre">Padre</option>
                            <option value="Madre">Madre</option>
                            <option value="Ambos">Ambos</option>
                            <option value="Abuelos">Abuelos</option>
                            <option value="Tios">Tios</option>
                            <option value="Otro">Otro</option>
                        </select>
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
