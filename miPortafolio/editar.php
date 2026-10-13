<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Mensaje</title>
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <header>
    <h1>Zona Administración</h1>
    <p>Formulario para Editar</p>
    <a href="admin.php" title="Regresar a Admin"></a>
    <a href="index.php" title="Regresar al Portafolio"></a>
  </header>

  <form action="actualizar.php" method="POST">
    <label>Nombre</label>
    <input type="text" name="nombre" value="Ana">

    <label>Correo electrónico</label>
    <input type="email" name="correo" value="ana@example.com">

    <label>Mensaje</label>
    <textarea name="mensaje">Hola, me interesa tu portafolio.</textarea>

    <button type="submit">Actualizar Mensaje</button>
  </form>

  <footer>
    <p>© 2026 Mi Portafolio | Práctica de Programación Web</p>
  </footer>
</body>
</html>
