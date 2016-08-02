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
        if (!isset($_SESSION["profesor"])) {
            header("location:index.php");
        }
        ?>
        <?php
        $id = filter_input(INPUT_GET, 'Id');
        $procedencia = filter_input(INPUT_GET, 'Proc');
        $fecha_incorporacion = filter_input(INPUT_GET, 'F_inc');
        $problema_aprendizaje = filter_input(INPUT_GET, 'P_apr');
        $curso_repetido = filter_input(INPUT_GET, 'Cur');
        function problema_aprendizaje($condicion){
            if(strcmp($condicion, "C")==0){
                echo "Sí";
            }else{
                echo "No";
            }
        }
        ?>
        <nav class="green darken-4">
            <div class="nav-wrapper fixed">
                
            </div>
        </nav>
        <div class="container">
            <div class="row">
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
                                <option value="<?php problema_aprendizaje($problema_aprendizaje); ?>" selected><?php problema_aprendizaje($problema_aprendizaje); ?></option>
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
                        <button class="btn waves-effect waves-light green" type="submit" name="guardar">Guardar
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

