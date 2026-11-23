<?php
require_once("conexion.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $concepto = $_POST["concepto"];
    $monto = $_POST["monto"];
    $estado = $_POST["estado"];

    $sql = "INSERT INTO gastos (concepto, monto, estado) VALUES ('$concepto', '$monto', '$estado')";

    if ($conexion->query($sql) === TRUE) {
        echo "Gasto registrado correctamente.";
    } else {
        echo "Error al registrar el gasto: " . $conexion->error;
    }
}