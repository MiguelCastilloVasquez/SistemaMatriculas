<!DOCTYPE html>
<html>
    <head>
        <title>Datos Familiar</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body style="background: #e5e4e4">
        <?php
        session_start();
        if (!isset($_SESSION["profesor"])) {
            header("location:index.php");
        }
        foreach ($_POST as $clave => $valor) {
            $_SESSION['sesionform2'][$clave] = $valor;
        }
        ?>
        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <a class="brand-logo"><img src="img/adven2.png" class="left"><h5>Sistema de Matrículas CACH</h5></a>
                <a class="brand-logo center"><h5>Datos Familiares</h5></a>
                </ul>
            </div>
        </nav>

        <div class="container" style="margin-top: 50px">
            <form class="col s12" action="formulario_sige.php" method="post">
                <div class="row">
                    <p>I. NIVEL EDUCACIONAL PADRES</p>
                    <div class="input-field col s3">
                        <p>Padre*</p>
                        <select name="educacion_padre" required class="browser-default">
                            <option value="" disabled selected>---Seleccionar---</option>
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
                            <option value="" disabled selected>---Seleccionar---</option>
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
                            <option value="" disabled selected>---Seleccionar---</option>
                            <option value="Padre">Padre</option>
                            <option value="Madre">Madre</option>
                            <option value="Ambos">Ambos</option>
                            <option value="Abuelos">Abuelos</option>
                            <option value="Tios">Tios</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="row"><p>II. APODERADO O TUTOR</p></div>
                    <div class="input-field col s3">
                        <input id="nombre-tutor" type="text" class="validate" name="nombre_tutor" required>
                        <label>Nombre*</label>
                    </div>

                    <div class="input-field col s3 push-s1">
                        <input id="apellido-tutor" type="text" class="validate" name="apellido_tutor" required>
                        <label>Apellido*</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input id="domiclio-tutor" type="text" class="validate" name="domicilio_tutor" required>
                        <label for="domicilio-tutor">Domicilio*</label>
                    </div>
                    <div class="input-field col s4">
                        <input id="correo_tutor" type="email" class="validate" name="correo_tutor">
                        <label for="correo_tutor" data-error="formato incorrecto">Correo*</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="emergencia-tutor" type="text" class="validate" name="emergencia_tutor" required>
                        <label for="emergencia-tutor" data-error="formato incorrecto">Numero emergencia*</label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light green" type="submit" name="siguiente">Siguiente
                        <i class="material-icons right">fast_forward</i>
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