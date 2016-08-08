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
            <form class="col s12" action="registrar_alumno.php" method="post">   
                <div class="row">
                    <div class="col s4">
                        <p>Procedencia Indigena</p>
                        <select name="procedencia_indigena">
                            <option value="">Ninguna</option>
                            <option value="Aymara">Aymara</option>
                            <option value="Atacameño">Atacameño</option>
                            <option value="Colla">Colla</option>
                            <option value="Diaguita">Diaguita</option>
                            <option value="Quecha">Quechua</option>
                            <option value="Rapa Nui">Rapa Nui</option>
                            <option value="Mapuche">Mapuche</option>
                            <option value="Kawashkar(Alacalufe)">Kawashkar(Alacalufe)</option>
                            <option value="Yamana">Yagan</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s9">
                        <p>Indique el ultimo nivel educacional 
                            cursado por la persona asociada al estudiante. (Si la persona esta estudiando, 
                            indique el nivel que se encuentra cursando)
                        </p>
                        <select name="educacion_asociado">
                            <option value="">---Seleccionar---</option>
                            <option value="1° año de educacion basica">1° año de educacion basica</option>
                            <option value="2° año de educacion basica">2° año de educacion basica</option>
                            <option value="3° año de educacion basica">3° año de educacion basica</option>
                            <option value="4° año de educacion basica">4° año de educacion basica</option>
                            <option value="5° año de educacion basica">5° año de educacion basica</option>
                            <option value="6° año de educacion basica">6° año de educacion basica</option>
                            <option value="7° año de educacion basica">7° año de educacion basica</option>
                            <option value="8° año de educacion basica">8° año de educacion basica</option>
                            <option value="1° año de educacion media">1° año de educacion media</option>
                            <option value="2° año de educacion media">2° año de educacion media</option>
                            <option value="3° año de educacion media">3° año de educacion media</option>
                            <option value="4° año de educacion media Cientifico o Humanista">4° año de educacion media Cientifico o Humanista</option>
                            <option value="4° o 5° año de educacion media Tecnico Profesional o Vocacional">4° o 5° año de educacion media Tecnico Profesional o Vocacional</option>
                            <option value="Educacion en un Centro de Formacion Tecnica o Instituto Profesional en curso o imcompleta">Educacion en un Centro de Formacion Tecnica o Instituto Profesional en curso o imcompleta</option>
                            <option value="Titulado de un Centro de Formacion Tecnica o Instituto Profesional">Titulado de un Centro de Formacion Tecnica o Instituto Profesional</option>
                            <option value="Educacion Universitaria en curso o incompleta">Educacion Universitaria en curso o incompleta</option>
                            <option value="Titulado de una Universidad">Titulado de una Universidad</option>
                            <option value="Estudiante o titulado de magister">Estudiante o titulado de magister</option>
                            <option value="Estudiante o titulado de doctorado">Estudiante o titulado de doctorado</option>
                            <option value="No sabe o no recuerda">No sabe o no recuerda</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col s9">
                        <p>¿Cual es la situacion laboral de la persona asociada al estudiante? Seleccione una Alternativa.
                        </p>
                        <select name="situacion_laboral">
                            <option value="">---Seleccionar---</option>
                            <option value="Trabaja jornada completa">Trabaja jornada completa (todo el dia)</option>
                            <option value="Trabaja jornada parcial">Trabaja jornada parcial (medio dia o algunas horas al dia)</option>
                            <option value="No trabaja en este momento, pero esta en busqueda de trabajo">No trabaja en este momento, pero esta en busqueda de trabajo (cesante o busca trabajo por primera vez)</option>
                            <option value="No trabaja y no esta en busqueda de trabajo">No trabaja y no esta en busqueda de trabajo (dueña de casa, jubilado, pensionado, etc.)</option>
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
                    <div class="col s4">
                        <select name="lugar_trabajo" required class="browser-default">
                            <option value="">---Seleccionar---</option>
                            <option value="En el hogar">En el hogar</option>
                            <option value="Fuera del hogar">Fuera del hogar</option>
                        </select>
                    </div>
                </div>
                <div class="row">

                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light green" type="submit" name="enviar">Enviar
                        <i class="material-icons right">send</i>
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