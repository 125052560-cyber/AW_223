<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete = $conexion->prepare("DELETE FROM mensajes WHERE id=?");
    $delete->bind_param("i", $id);

    if ($delete->execute()) {
        header("Location: admin.php?estado=exitoBorrar");
    } else {
        header("Location: admin.php?estado=errorBorrar");
    }

    $delete->close();
    exit;
}
?>
