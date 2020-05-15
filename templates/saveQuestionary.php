<?php
require_once "conexion.php";

$pointID = $_POST['pointID'];

$controlRiesgo = $_POST['checkControlRiesgo'];
$nivelContacto = $_POST['checkNivelContacto'];
$riesgoContagio = $_POST['checkRiesgoContagio'];

$marcaDeTiempo =  date("d") . "-" . date("m") . "-" . date("Y") . "|" . date("H") . "-" . date("i") . "-" . date("s");

$SQL =
    "INSERT INTO cuestionarios 
        (nombreCuestionario, idPuntoComprobacion, idControlRiesgo, idNivelContacto, idRiesgoContagio)
    VALUES 
        ('$marcaDeTiempo', '1', $controlRiesgo[0], $nivelContacto[0], $riesgoContagio[0]),
        ('$marcaDeTiempo', '2', $controlRiesgo[1], $nivelContacto[1], $riesgoContagio[1]),
        ('$marcaDeTiempo', '3', $controlRiesgo[2], $nivelContacto[2], $riesgoContagio[2]),
        ('$marcaDeTiempo', '4', $controlRiesgo[3], $nivelContacto[3], $riesgoContagio[3]),
        ('$marcaDeTiempo', '5', $controlRiesgo[4], $nivelContacto[4], $riesgoContagio[4]),
        ('$marcaDeTiempo', '6', $controlRiesgo[5], $nivelContacto[5], $riesgoContagio[5]),
        ('$marcaDeTiempo', '7', $controlRiesgo[6], $nivelContacto[6], $riesgoContagio[6])";
$stmt = Conexion::conectar()->prepare($SQL);
$stmt->execute();
?>