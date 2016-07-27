<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Datos Personales</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body style="background: #e5e4e4">
        <?php
            $anio = date("Y");
        ?>
        <nav class="green darken-4">
            <div class="nav-wrapper fixed">
                <a class="brand-logo center"><h5>Datos personales</h5></a>
            </div>
        </nav>
        <div class="row">
            
        </div>
        <div class="container">
        <div class="row">
            <form class="col s12" action="formulario_datos_escolares.php" method="post">
                <div class="row">
                    <div class="input-field col s1">
                        <input disabled value="<?php echo $anio ?>" id="anio" type="text" class="validate" name="anio">
                        <label for="anio">Año</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="run" type="text" class="validate" name="run">
                        <label for="run">RUT</label>
                    </div>
                </div>
        <div class="row">
            <div class="input-field col s3">
                <input id="paterno" type="text" class="validate" name="paterno">
                <label for="paterno">Apellido Paterno</label>
            </div>
            <div class="input-field col s3">
                <input id="materno" type="text" class="validate" name="materno">
                <label for="materno">Apellido Materno</label>
            </div>
            <div class="input-field col s6">
                <input id="nombre" type="text" class="validate" name="nombre">
                <label for="nombre">Nombres</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s2">
                <select name="sexo">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Masculino">Masculino</option>
                </select>
                <label>Sexo</label>
            </div>
            <div class="input-field col s3">
                <input id="nacimiento" type="date" class="datepicker" name="nacimiento">
                <label for="nacimiento">Fecha de Nacimiento</label>
            </div>
            <div class="input-field col s2">
                <select name="edad">
                    <option value="" disabled selected>Seleccionar</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                </select>
                <label>Edad</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s5">
                <input id="domicilio" type="text" class="validate" name="domicilio">
                <label for="domicilio">Domicilio</label>
            </div>
            <div class="input-field col s3">
                <input id="comuna" type="text" class="validate" name="comuna">
                <label for="comuna">Comuna</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input id="enfermedad" type="text" class="validate" name="enfermedad">
                <label for="enfermedad">¿Posee alguna enfermedad?</label>
            </div>
        </div>
                <div class="row">
                    <button class="btn waves-effect waves-light green" type="submit" name="pasarADos">Siguiente
                        <i class="material-icons right">fast_forward</i>
                    </button>
                </div>
            </form>
        </div>
        </div>
         <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function() {
                $('select').material_select();
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.datepicker').pickadate({
                 selectMonths: true, // Creates a dropdown to control month
                 selectYears: 40 // Creates a dropdown of 15 years to control year
                 });
            });
        </script>
    </body>
</html>
