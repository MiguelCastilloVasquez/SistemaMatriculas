<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario SIGE</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php
        session_start();
        if (!isset($_SESSION["profesor"])) {
            header("location:index.php");
        }
        foreach ($_POST as $clave => $valor) {
            $_SESSION['sesionform3'][$clave] = $valor;
        }
        ?>
        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <a class="brand-logo"><img src="img/adven2.png" class="left"><h5>Sistema de Matrículas CACH</h5></a>
                <a class="brand-logo center"><h5>Datos SIGE</h5></a>
            </div>
        </nav>

        <div class="container" style="margin-top: 50px">
            <form class="col s12" action="#" method="post">   
                <div class="row">
                    <div class="col s4">
                        <p>Procedencia Indigena</p>
                        <select name="procedencia-indigena">
                            <option value="">Ninguna</option>
                            <option value="mapuche">Mapuche</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s9">
                        <p>Indique el ultimo nivel educacional 
                            cursado por la persona asociada al estudiante. (Si la persona esta estudiando, 
                            indique el nivel que se encuentra cursando)
                        </p>
                        <select name="educacion-padre" required class="browser-default">
                            <option value="">---Seleccionar---</option>
                            <option value="1">Educacion Basica</option>
                            <option value="2">Educacion Media</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s9">
                        <p>¿Cual es la situacion laboral de la persona asociada al estudiante? Seleccione una Alternativa.
                        </p>
                        <select name="educacion-padre" required class="browser-default">
                            <option value="">---Seleccionar---</option>
                            <option value="1">Educacion Basica</option>
                            <option value="2">Educacion Media</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s9">
                        <p>Si actualmente la persona trabaja, ¿donde trabaja principalmente? Seleccione una Alternativa.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s3">
                        <input type="radio" name="radiogroup" id="en-hogar" value="en el hogar" required/>
                        <label for="en-hogar" class="black-text">En el hogar </label>
                    </div>
                    <div class="col s3">
                        <input type="radio" name="radiogroup" id="fuera-hogar" value="fuera del hogar" required/>
                        <label for="fuera-hogar" class="black-text">Fuera del hogar </label>
                    </div>
                </div>
                <div class="row">

                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="siguiente">Enviar
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