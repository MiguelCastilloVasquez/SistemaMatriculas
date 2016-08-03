<html>
    <head>
        <meta charset="UTF-8">
        <title>Editar datos Personales</title>
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
            $rut = filter_input(INPUT_GET, 'rut');
            $nom = filter_input(INPUT_GET, 'nom');
            $ap_pat = filter_input(INPUT_GET, 'pat');
            $ap_mat = filter_input(INPUT_GET, 'mat');
            $sexo = filter_input(INPUT_GET, 'sex');
            $f_nac = filter_input(INPUT_GET, 'nac');
            $edad = filter_input(INPUT_GET, 'edad');
            $dom = filter_input(INPUT_GET, 'dom');
            $com = filter_input(INPUT_GET, 'com');
            $probl_salud = filter_input(INPUT_GET, 'probl');
        ?>
        <nav class="green darken-4">
            <div class="nav-wrapper fixed">
                
            </div>
        </nav>
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <form class="col s12" action="update_datos_personales.php" method="post">
                    <div class="row">
                        <input id="id" type="hidden" class="validate" name="id" value="<?php echo $id ?>">
                        <label for="id"></label>
                        <div class="input-field col s3">
                            <input id="run" type="text" class="validate" name="run" required value="<?php echo $rut ?>">
                            <label for="run">RUT*</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <input id="paterno" type="text" class="validate" name="paterno" required value="<?php echo $ap_pat ?>">
                            <label for="paterno">Apellido Paterno*</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="materno" type="text" class="validate" name="materno" required value="<?php echo $ap_mat ?>">
                            <label for="materno">Apellido Materno*</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="nombre" type="text" class="validate" name="nombre" required value="<?php echo $nom ?>">
                            <label for="nombre">Nombres*</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s2">
                            <p class="left">Sexo*</p>
                            <select name="sexo" required class="browser-default">
                                <option value="<?php echo $sexo ?>" selected><?php echo $sexo ?></option>
                                <option value="F">Femenino</option>
                                <option value="M">Masculino</option>
                            </select>

                        </div>
                        <div class="input-field col s3">
                            <input id="nacimiento" type="date" class="datepicker" name="nacimiento" value="<?php echo $f_nac ?>">
                            <label for="nacimiento">Fecha de Nacimiento*</label>
                        </div>
                        <div class="input-field col s2">
                            <p class="left">Edad*</p>
                            <select name="edad" required class="browser-default">
                                <option value="<?php echo $edad ?>" selected><?php echo $edad ?></option>
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s5">
                            <input id="domicilio" type="text" class="validate" name="domicilio" required value="<?php echo $dom ?>">
                            <label for="domicilio">Domicilio*</label>
                        </div>
                        <div class="input-field col s3">
                            <input id="comuna" type="text" class="validate" name="comuna" required value="<?php echo $com ?>">
                            <label for="comuna">Comuna*</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input id="enfermedad" type="text" class="validate" name="enfermedad" value="<?php echo $probl_salud ?>">
                            <label for="enfermedad">¿Posee alguna enfermedad?</label>
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

