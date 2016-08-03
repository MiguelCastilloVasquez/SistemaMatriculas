<?php

session_start();
foreach ($_POST as $clave => $valor) {
    $_SESSION['sesionform1'][$clave] = $valor;
}
extract($_SESSION['sesionform1']);
include("conexion_bd.php");
if (isset($_POST['guardar'])) {
    $guardarRetiro = "update retiro set fecha_retiro=:fecha, motivo_retiro=:motivo where identificador_retiro=:id";
    $resultadoAgregarRetiro = $dataBase->prepare($guardarRetiro);
    $resultadoAgregarRetiro->execute(array(":id" => $identificador, ":fecha" => $fecha, ":motivo" => $motivo));
    unset($_SESSION['sesionform1']);
    $men = "Retiro agregado correctamente";
    print "<script>alert('$men')</script>";
    print("<script>window.location.replace('retirar_alumno.php');</script>");
}
?>


