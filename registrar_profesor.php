
<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "adventista";
$tbl_name = "profesor";

$form_pass = $_POST['pass'];



$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}

$buscarUsuario = "SELECT * FROM $tbl_name
 WHERE nombre = '$_POST[usuario]' ";

$result = $conexion->query($buscarUsuario);

$count = mysqli_num_rows($result);

if ($count == 1) {
    $men = "Nombre Profesor Existente, Por favor intente con otro";
    print "<script>alert('$men')</script>";
    print("<script>window.location.replace('agregar_profesor.php');</script>");
} else {

    $query = "INSERT INTO profesor (nombre, password)
           VALUES ('$_POST[usuario]', '$_POST[pass]')";

    if ($conexion->query($query) === TRUE) {
        $mensaje = "Profesor Creado Correctamente";
        print "<script>alert('$mensaje')</script>";
        print("<script>window.location.replace('inicio_administrador.php');</script>");
    } else {
        $msg = "Error! No se pudo crear profesor";
        print "<script>alert('$msg')</script>";
        print("<script>window.location.replace('agregar_profesor.php');</script>");
    }
}
mysqli_close($conexion);
?>