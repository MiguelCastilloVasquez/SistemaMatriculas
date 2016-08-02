<!DOCTYPE html>
<html>
    <head>
        <title>Agregar Curso</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                <a class="brand-logo center"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Agregar Curso</h5></a>
            </div>
        </nav>

        <div class="container" style="margin-top: 50px">
            <form class="col s12" action="registrar_curso.php" method="post"> 
                <div class="row">
                    <div class="col s4">
                        <p>Seleccione Nombre del curso</p>
                        <select name="nombre_curso" required>
                            <option value="">---Seleccionar---</option>
                            <option value="Primero Medio A">Primero Medio A</option>
                            <option value="Primero Medio B">Primero Medio B</option>
                            <option value="Primero Medio C">Primero Medio C</option>
                            <option value="Primero Medio D">Primero Medio D</option>
                            <option value="Segundo Medio A">Segundo Medio A</option>
                            <option value="Segundo Medio B">Segundo Medio B</option>
                            <option value="Segundo Medio C">Segundo Medio C</option>
                            <option value="Segundo Medio D">Segundo Medio D</option>
                            <option value="Tercero Medio A">Tercero Medio A</option>
                            <option value="Tercero Medio B">Tercero Medio B</option>
                            <option value="Tercero Medio C">Tercero Medio C</option>
                            <option value="Tercero Medio D">Tercero Medio D</option>
                            <option value="Cuarto Medio A">Cuarto Medio A</option>
                            <option value="Cuarto Medio B">Cuarto Medio B</option>
                            <option value="Cuarto Medio C">Cuarto Medio C</option>
                            <option value="Cuarto Medio D">Cuarto Medio D</option>
                        </select>
                    </div>
                    <div class="col s3 offset-s2">
                        <p>Seleccione Año</p>
                        <select name="anio_curso" required>
                            <option value="">---Seleccionar---</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s3">
                        <input id="cant_curso" class="validate" name="cant_curso" type="text" required/>
                        <label for="cant_curso">Cantidad max. alumnos</label>
                    </div>
                </div>
                <br/><br/><br/><br/>
                <div class="row">
                    <button class="btn waves-effect waves-light green" type="submit" name="pasarADos">Crear Curso
                        <i class="material-icons right">create</i>
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