<?php
include("conexion.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conexion->prepare("SELECT nombre, correo, mensaje FROM mensajes WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($nombre, $correo, $mensaje);
    $stmt->fetch();
    $stmt->close();
} else {
    header("Location: admin.php?estado=error");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Mensaje</title>
  <style>
    body {
      background-color: #0A3D62;
      color: #F5F5F5;
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #1B5C79;
      text-align: center;
      padding: 30px 0;
    }
    header h1 {
      font-size: 2em;
      margin-bottom: 10px;
    }
    header p {
      font-style: italic;
      margin-bottom: 15px;
    }
    header a {
      display: inline-block;
      background-color: #3B8EA5;
      color: #fff;
      text-decoration: none;
      padding: 8px 15px;
      border-radius: 5px;
      margin: 5px;
      transition: background-color 0.3s ease;
    }
    header a:hover {
      background-color: #2E6E85;
    }
    form {
      background-color: #1B5C79;
      width: 90%;
      max-width: 600px;
      margin: 40px auto;
      padding: 25px;
      border-radius: 10px;
      display: flex;
      flex-direction: column;
      gap: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }
    label {
      font-weight: bold;
      margin-bottom: 5px;
    }
    input, textarea {
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 1em;
      width: 100%;
      background-color: #2E6E85;
      color: #fff;
    }
    textarea {
      resize: none;
      height: 120px;
    }
    button {
      background-color: #27AE60;
      color: #fff;
      border: none;
      padding: 12px;
      border-radius: 5px;
      font-size: 1em;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    button:hover {
      background-color: #1E8449;
    }
    footer {
      text-align: center;
      background-color: #1B5C79;
      padding: 15px 0;
      font-size: 0.9em;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <header>
    <h1>Zona Administracion</h1>
    <p>Formulario para Editar</p>
    <a href="admin.php" title="Regresar a Admin">Volver a Admin</a>
    <a href="index.php" title="Regresar al Portafolio">Volver al Portafolio</a>
    <link rel="stylesheet" href="../css/estilos.css">

  </header>

  <form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <label>Nombre</label>
    <input type="text" name="nombre" value="<?php echo htmlspecialchars($nombre); ?>" required>

    <label>Correo electronico</label>
    <input type="email" name="correo" value="<?php echo htmlspecialchars($correo); ?>" required>

    <label>Mensaje</label>
    <textarea name="mensaje" required><?php echo htmlspecialchars($mensaje); ?></textarea>

    <button type="submit">Actualizar Mensaje</button>
  </form>

  <footer>
    <p>© 2026 Mi Portafolio | Practica de Programacion Web</p>
  </footer>

  <!--  Script al final del body -->
  <script src="js/alertInsert.js"></script>
</body>
</html>
