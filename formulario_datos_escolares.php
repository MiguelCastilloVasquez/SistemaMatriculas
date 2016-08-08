<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Datos Escolares</title>
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
            $_SESSION['sesionform1'][$clave] = $valor;
        }
        ?>
        <nav class="green darken-4">
            <div class="nav-wrapper fixed">
                <a class="brand-logo"><img src="img/adven2.png" class="left"><h5>Sistema de Matrículas CACH</h5></a>
                <a class="brand-logo center"><h5>Datos Escolares</h5></a>
            </div>
        </nav>
        <div class="row">

        </div>
        <div class="container">
            <div class="row">
                <form action="formulario_datos_familiares.php" method="post" onsubmit="return verificar()">
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="procedencia" type="text" class="validate" name="procedencia" required="">
                            <label for="procedencia">Procedencia*</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="incorporacion" type="date" class="datepicker" name="incorporacion">
                            <label for="incorporacion">Fecha de Incorporación*</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <p>¿Posee problemas de aprendizaje?*</p>
                            <select name="aprendizaje" required class="browser-default">
                                <option value="" disabled selected>Seleccionar</option>
                                <option value="C">Sí</option>
                                <option value="S">No</option>
                            </select>

                        </div>
                        <div class="input-field col s4">
                            <input id="repeticion" type="text" class="validate" name="repeticion">
                            <label for="repeticion">¿Ha repetido algún curso?</label>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light green" type="submit" name="pasarATres">Siguiente
                            <i class="material-icons right">fast_forward</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <script>
            function verificar(){
                var fecha = document.getElementById('incorporacion').value;
                if(fecha.length===0){
                    return false;
                }
                return true;
            }
        </script>
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
