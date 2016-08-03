<?php

session_start();
foreach ($_POST as $clave => $valor) {
    $_SESSION['sesionform1'][$clave] = $valor;
}
extract($_SESSION['sesionform1']);
include("conexion_bd.php");
if (isset($_POST['guardar'])) {
    $guardarEgreso = "update alumno set fecha_egreso=:fecha where id_alumno=:id";
    $resultadoAgregarEgreso = $dataBase->prepare($guardarEgreso);
    $resultadoAgregarEgreso->execute(array(":id" => $id, ":fecha" => $egreso));
    unset($_SESSION['sesionform1']);
    $men = "Fecha egreso añadida correctamente";
    print "<script>alert('$men')</script>";
    print("<script>window.location.replace('inicio_administrador.php');</script>");
}
?>