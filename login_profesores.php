<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body background="img/celeste.jpg" style="height: 100%; width: 100%;">
        
            <div class="container" style="position: absolute; left: 370px; top: 140px;">
                <div class="row">
                    <h5 class="white-text">Iniciar sesión como profesor:</h5>
                    <form class="col s4" action="validar_profesor.php" method="post">
                        <div class="row">
                            <div class="input-field col s10">
                                <input id="nombre" type="text" class="validate" name="nombre">
                                <label for="nombre" class="white-text" style="font-size: 20px;">Nombre</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s10">
                                <input id="clave" type="password" class="validate" name="clave">
                                <label for="clave" class="white-text" style="font-size: 20px;">Contraseña</label>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn waves-effect waves-light blue darken-4" type="submit" name="ingresar">Ingresar
                                <i class="material-icons right">input</i>
                            </button>
                        </div>
                    </form>
                </div> 
            </div>
        
        
        
        <!-- Adjuntando los archivos JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
    </body>
</html>

