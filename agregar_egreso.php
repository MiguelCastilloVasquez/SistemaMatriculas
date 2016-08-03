<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Año Retiro</title>
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
        $rut = filter_input(INPUT_GET, 'rut');
        $nom = filter_input(INPUT_GET, 'nom');
        $ap_pat = filter_input(INPUT_GET, 'a_pat');
        $ap_mat = filter_input(INPUT_GET, 'a_mat');
        $anio = filter_input(INPUT_GET, 'anio');
        $egreso = filter_input(INPUT_GET, 'fecha');
        ?>
        <nav>
            <div class="nav-wrapper fixed green darken-4 z-depth-5">
                <ul class="right hide-on-med-and-down">
                    <a class="btn-floating btn-large waves-effect waves-light blue" href="inicio_administrador.php"><i class="material-icons">home</i></a>
                </ul>
                <a class="brand-logo"><img src="img/adven2.png" class="left"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Sistema de Matrículas CACH</h5></a>
                <a class="brand-logo center"><h5 class="amber-text text-accent-1" style="text-shadow: 2px 2px 4px black">Agregar Año Retiro Alumno</h5></a>
            </div>
        </nav>
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <form class="col s12" action="guardar_egreso.php" method="post">
                    <div class="row">
                        <input id="id" type="hidden" class="validate" name="id" value="<?php echo $id ?>">
                        <label for="id"></label>
                        <div class="input-field col s3">
                            <input id="run" type="text" class="validate grey-text" name="run" value="<?php echo $rut ?>" disabled>
                            <label class="black-text" for="run">RUT</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="anio_a" type="text" class="validate grey-text" name="anio_a" value="<?php echo $anio ?>" disabled>
                            <label class="black-text" for="run">Año</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input id="paterno" type="text" class="validate grey-text" name="paterno" value="<?php echo $ap_pat ?>" disabled>
                            <label class="black-text" for="paterno">Apellido Paterno</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="materno" type="text" class="validate grey-text" name="materno" value="<?php echo $ap_mat ?>" disabled>
                            <label class="black-text" for="materno">Apellido Materno</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="nombre" type="text" class="validate grey-text" name="nombre" value="<?php echo $nom ?>" disabled>
                            <label class="black-text" for="nombre">Nombres</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="egreso" type="text" class="validate" name="egreso" required>
                            <label for="egreso">Año Egreso*</label>
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

