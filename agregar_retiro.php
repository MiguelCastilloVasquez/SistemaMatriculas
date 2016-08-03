<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar Retiro</title>
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
        <?php
        $id = filter_input(INPUT_GET, 'Id');
        $fecha = filter_input(INPUT_GET, 'fecha');
        $motivo = filter_input(INPUT_GET, 'motivo');
        ?>

        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <ul class="right hide-on-med-and-down">
                    <a class="btn-floating btn-large waves-effect waves-light blue" href="inicio_administrador.php"><i class="material-icons">home</i></a>
                </ul>
                <a class="brand-logo"><img src="img/adven2.png" class="left"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Sistema de Matrículas CACH</h5></a>
                <a class="brand-logo center"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Editar Datos Retiro</h5></a>
            </div>
        </nav>

        <div class="container" style="margin-top: 50px;">
            <div class="row">
                <form class="col s12" action="guardar_retiro.php" method="post">
                    <div class="row">
                        <input id="identificador" type="hidden" class="validate" name="identificador" value="<?php echo $id ?>">
                        <label for="identificador"></label>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input id="fecha" type="date" class="datepicker" name="fecha" required>
                            <label for="fecha">Fecha de Retiro*</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s8">
                            <input id="motivo" class="validate" name="motivo" required type="text"></textarea>
                            <label for="motivo">Motivo*</label>
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

        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
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