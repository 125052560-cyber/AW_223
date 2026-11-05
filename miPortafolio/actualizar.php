<?php
include("conexion.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $mensaje = trim($_POST['mensaje']);

    if (empty($nombre) || empty($correo) || empty($mensaje)) {
        header("Location: admin.php?estado=errorActualizar");
        exit;
    }

    $update = $conexion->prepare("UPDATE mensajes SET nombre=?, correo=?, mensaje=? WHERE id=?");
    $update->bind_param("sssi", $nombre, $correo, $mensaje, $id);

    if ($update->execute()) {
        header("Location: admin.php?estado=exitoActualizar");
    } else {
        header("Location: admin.php?estado=errorActualizar");
    }

    $update->close();
    exit;
}
?>
