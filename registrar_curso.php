<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "adventista";
$tbl_name = "curso";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}

$buscarCurso = "SELECT * FROM $tbl_name
 WHERE seccion = '$_POST[nombre_curso]' and anio_curso = '$_POST[anio_curso]' ";

$result = $conexion->query($buscarCurso);

$count = mysqli_num_rows($result);

if ($count == 1) {
    $men = "Curso ya esta creado para ese año";
    print "<script>alert('$men')</script>";
    print("<script>window.location.replace('agregar_curso.php');</script>");
} else {

    $query = "INSERT INTO curso (seccion, max_cant, anio_curso)
           VALUES ('$_POST[nombre_curso]', '$_POST[cant_curso]', '$_POST[anio_curso]')";

    if ($conexion->query($query) === TRUE) {
        $mensaje = "Curso Creado Correctamente";
        print "<script>alert('$mensaje')</script>";
        print("<script>window.location.replace('inicio_administrador.php');</script>");
    } else {
        $msg = "Error! No se pudo crear Curso";
        print "<script>alert('$msg')</script>";
        print("<script>window.location.replace('agregar_curso.php');</script>");
    }
}
mysqli_close($conexion);

?>

