<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Datos Alumno</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="container col s4">
            <nav>
            <div class="nav-wrapper col s4">
                <div class="col s4">
                    <a href="datos_alumno.php" class="breadcrumb">Datos personales</a>
                    <a href="#!" class="breadcrumb">Datos escolares</a>
                    <a href="#!" class="breadcrumb">Datos familiares</a>
                    <a href="#!" class="breadcrumb">Datos SIGE</a>
                </div>
            </div>
        </nav>
        </div>
        <div class="row">
    <form class="col s12">
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
            <select>
                <option value="" disabled selected>Seleccionar</option>
                <option value="1">Femenino</option>
                <option value="2">Masculino</option>
            </select>
            <label>Sexo</label>
        </div>
          <div class="input-field col s3">
              <input id="run" type="text" class="validate" name="run">
          <label for="run">RUT</label>
        </div>
          <div class="input-field col s3">
              <input id="nacimiento" type="date" class="datepicker" name="nacimiento">
          <label for="nacimiento">Fecha de Nacimiento</label>
        </div>
          <div class="input-field col s2">
              <input id="edad" type="text" class="validate" name="edad">
          <label for="edad">Edad</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s5">
            <input id="domicilio" type="text" class="validate" name="domicilio">
          <label for="domicilio">Domicilio</label>
        </div>
          <div class="input-field col s3">
            <input id="comuna" type="text" class="validate" name="comuna">
          <label for="coumuna">Comuna</label>
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
