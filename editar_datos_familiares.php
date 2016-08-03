<!DOCTYPE html>
<html>
    <head>
        <title>Editar datos familiares</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php
        session_start();
        if (!isset($_SESSION["profesor"])) {
            header("location:index.php");
        }
        $id = filter_input(INPUT_GET, 'Id');
        $nep = filter_input(INPUT_GET, 'nep');
        $nem = filter_input(INPUT_GET, 'nem');
        $cqv = filter_input(INPUT_GET, 'cqv');
        ?>
        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <a class="brand-logo"><img src="img/adven2.png" class="left"></a>
            </div>
        </nav>

        <div class="container" style="margin-top: 50px">
            <form class="col s12" action="update_datos_familiares.php" method="post">
                <div class="row">
                    <input id="id" type="hidden" class="validate" name="id" value="<?php echo $id ?>">
                    <label for="id"></label>
                    <div class="row"><p>NIVEL EDUCACIONAL PADRES</p></div>
                    <div class="input-field col s3">
                        <p>Padre*</p>
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
                        <p>Madre*</p>
                        <select required name="educacion_madre" class="browser-default">
                            <option value="<?php echo $nem ?>" selected><?php echo $nep ?></option>
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
                        <p>Persona con quien vive*</p>
                        <select name="con_quien_vive" required class="browser-default">
                            <option value="<?php echo $cqv ?>" selected><?php echo $nep ?></option>
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
