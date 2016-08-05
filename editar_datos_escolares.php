<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar datos Escolares</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body style="background: #e5e4e4">
        <?php
        session_start();
        if (!isset($_SESSION["profesor"]) && !isset($_SESSION["administrador"])) {
            header("location:index.php");
        }
        ?>
        <?php
        $id = filter_input(INPUT_GET, 'Id');
        $procedencia = filter_input(INPUT_GET, 'Proc');
        $fecha_incorporacion = filter_input(INPUT_GET, 'F_inc');
        $problema_aprendizaje = filter_input(INPUT_GET, 'P_apr');
        $curso_repetido = filter_input(INPUT_GET, 'Cur');
        ?>
        <div class="row">
            <nav>
                <div class="nav-wrapper fixed green darken-4">
                    <a class="brand-logo"><img src="img/adven2.png" class="left"></a>
                    <ul class="right hide-on-med-and-down">
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="cerrar_sesion.php" style=" margin-top: 3px;"><i class="material-icons">exit_to_app</i></a>
                        <a class="btn-floating btn-large waves-effect waves-light green darken-4 right" href="inicio_profesores.php" style=" margin-top: 3px;"><i class="material-icons">home</i></a>
                    </ul>
                </div>
            </nav>
         </div>
        <div class="container">
            <div class="row">
                <h5 class="teal-text text-darken-4">Editar datos escolares</h5>
                <form action="upadate_escolar.php" method="post">
                    <input id="id" type="hidden" class="validate" name="id" value="<?php echo $id ?>">
                    <label for="id"></label>
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="procedencia" type="text" class="validate" name="procedencia" required value="<?php echo $procedencia ?>">
                            <label for="procedencia">Procedencia*</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="incorporacion" type="date" class="datepicker" name="incorporacion" value="<?php echo $fecha_incorporacion?>">
                            <label for="incorporacion">Fecha de Incorporación*</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <p>¿Posee problemas de aprendizaje?*</p>
                            <select name="aprendizaje" required class="browser-default">
                                <option value="<?php echo $problema_aprendizaje?>" selected><?php echo $problema_aprendizaje ?></option>
                                <option value="C">Sí</option>
                                <option value="S">No</option>
                            </select>

                        </div>
                        <div class="input-field col s4">
                            <input id="repeticion" type="text" class="validate" name="repeticion" value="<?php echo $curso_repetido ?>">
                            <label for="repeticion">¿Ha repetido algún curso?</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light teal darken-4" type="submit" name="guardar">Guardar
                            <i class="material-icons right">save</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script>
            $(document).ready(function () {
                $('select').material_select();
            });
        </script>
        <script>
            $(document).ready(function () {
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 40, // Creates a dropdown of 15 years to control year
                    labelMonthNext: 'Mes Próximo',
                    labelMonthPrev: 'Mes previo',
                    labelMonthSelect: 'Selecciona un mes',
                    labelYearSelect: 'Selecciona un año',
                    monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                    weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                    weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                    weekdaysLetter: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
                    today: 'Hoy',
                    clear: 'Limpiar',
                    close: 'Cerrar'
                });
            });
        </script>
    </body>
</html>

