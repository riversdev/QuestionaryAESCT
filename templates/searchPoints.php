<?php
require_once "conexion.php";

$pointID = $_POST['pointID'];

$SQL = "SELECT puntoComprobacion FROM puntosComprobacion WHERE idPuntoComprobacion = $pointID";
$stmt = Conexion::conectar()->prepare($SQL);
$stmt->execute();
$resultado = $stmt->fetchAll();

$SQL2 = "SELECT COUNT(*) FROM puntosComprobacion";
$stmt2 = Conexion::conectar()->prepare($SQL2);
$stmt2->execute();
$resultado2 = $stmt2->fetchAll();

if (count($resultado) == 0) {
    echo '<script>alertify.error("No existe el punto ' . $pointID . '");</script>';
} else {
    echo $resultado[0][0];
    echo '<script>$("#totalPoints").val(" ' . $resultado2[0][0] . ' ");</script>';
}
?>