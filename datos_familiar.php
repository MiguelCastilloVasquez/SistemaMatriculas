<!DOCTYPE html>
<html>
    <head>
        <title>Datos Familiar</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Sass</a></li>
                    <li><a href="badges.html">Components</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>

        <div class="container" style="margin-top: 50px">
            <form class="col s12" action="#">
                <div class="row">
                    <h5 class="center">Datos Familiar</h5>
                    <div class="row"><p>I. NIVEL EDUCACIONAL PADRES</p></div>
                    <div class="input-field col s3">
                        <p>Padre*</p>
                        <select name="educacion-padre" required class="browser-default">
                            <option value="">---Seleccionar---</option>
                            <option value="1">Educacion Basica</option>
                            <option value="2">Educacion Media</option>
                        </select>
                    </div>

                    <div class="input-field col s3">
                        <p>Madre*</p>
                        <select required name="educacion-madre" class="browser-default">
                            <option value="" disabled selected>---Seleccionar---</option>
                            <option value="1">Educacion Basica</option>
                            <option value="2">Educacion Media</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <p>Persona con quien vive*</p>
                        <select name="con-quien-vive" required class="browser-default">
                            <option value="" disabled selected>---Seleccionar---</option>
                            <option value="1">Padre</option>
                            <option value="2">Madre</option>
                            <option value="3">Abuelos</option>
                            <option value="4">Otro</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="row"><p>II. APODERADO O TUTOR</p></div>
                    <div class="input-field col s3">
                        <input id="nombre-tutor" type="text" class="validate" name="nombre-tutor" required>
                        <label>Nombre*</label>
                    </div>

                    <div class="input-field col s3 push-s1">
                        <input id="apellido-tutor" type="text" class="validate" name="apellido-tutor" required>
                        <label>Apellido*</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s4">
                        <input id="domiclio-tutor" type="text" class="validate" name="domicilio-tutor" required>
                        <label for="domicilio-tutor">Domicilio*</label>
                    </div>

                    <div class="input-field col s3 push-s1">
                        <input id="emergencia-tutor" type="text" class="validate" name="emergencia-tutor" required>
                        <label for="emergencia-tutor" data-error="formato incorrecto">Numero emergencia*</label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="siguiente">Siguiente
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